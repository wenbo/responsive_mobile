require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Option < ApplicationRecord
  mount_uploader :avatar, AvatarUploader
end
