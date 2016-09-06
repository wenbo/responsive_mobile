require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Product < ApplicationRecord
  scope :ordered, -> {order('created_at DESC')}
  mount_uploader :banner, AvatarUploader
  mount_uploader :thumb_image, AvatarUploader
  has_many :option_categories
  accepts_nested_attributes_for :option_categories, :allow_destroy => true
  has_and_belongs_to_many :utilities
  has_and_belongs_to_many :industries

  validates :sku, :title, :category_id, presence: true
  validates :sku, uniqueness: true

  def self.search(search)      
    if search
      where('sku LIKE ?', "%#{search}%")
    else
      ordered
    end
  end

end
