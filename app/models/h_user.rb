class HUser < ApplicationRecord
  self.abstract_class = true
  establish_connection :web
  self.table_name = "h_user"
  self.inheritance_column = 'h_user_type'
  self.primary_key = "user_id"
  has_many :registrations, foreign_key: :h_user_id

  def valid_password?(str)
    Digest::SHA1.hexdigest(str) == self.password
  end
end
