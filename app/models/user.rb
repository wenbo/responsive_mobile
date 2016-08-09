require 'bcrypt'

class User < ApplicationRecord
  # users.password_hash in the database is a :string
  include BCrypt
  include SimpleCaptcha::ModelHelpers
  apply_simple_captcha


  def password
    @password ||= Password.new(password_hash)
  end

  def password=(new_password)
    @password = Password.create(new_password)
    self.password_hash = @password
  end
  
  def encrypt_cookie_value
    cipher = OpenSSL::Cipher::AES.new(256, :CBC)
    cipher.encrypt
    cipher.key = HiokiRails5::Application.secrets[:secret_key_base]
    Base64.encode64(cipher.update("#{id} #{password_hash}") + cipher.final)
  end

  def self.decrypt_cookie_value(encrypted_value)
    decipher = OpenSSL::Cipher::AES.new(256, :CBC)
    decipher.decrypt
    decipher.key = HiokiRails5::Application.secrets[:secret_key_base]
    plain = decipher.update(Base64.decode64(encrypted_value)) + decipher.final
    id, crypted_password = plain.split
    return id.to_s, crypted_password
  rescue
    return 0, ""
  end

  def self.validate_cookie(encrypted_value)
    user_id, crypted_password = decrypt_cookie_value(encrypted_value)
    if (user = User.find_by(id: user_id)) && (self.password_hash = crypted_password)
      return user
    end
  end

end
