require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Option < ApplicationRecord
  validates :sku, uniqueness: true
  mount_uploader :avatar, AvatarUploader
end
