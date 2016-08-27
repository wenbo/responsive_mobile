require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Product < ApplicationRecord
  mount_uploader :banner, AvatarUploader
end
