require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Product < ApplicationRecord
  mount_uploader :banner, AvatarUploader
  mount_uploader :thumb_image, AvatarUploader
  has_many :option_categories
  accepts_nested_attributes_for :option_categories
  has_and_belongs_to_many :utilities
  has_and_belongs_to_many :industries
end
