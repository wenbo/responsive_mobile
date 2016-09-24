require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Product < ApplicationRecord
  UpgradeClassifier = [["下载文件", 1], ["操作说明书", 2]]
  scope :ordered, -> {order('created_at DESC')}
  scope :options, -> { where(is_option: true) }
  scope :is_display, -> { where(is_display: true) }
  scope :is_main_body, -> { where(is_main_body: true) }

  mount_uploader :banner, AvatarUploader
  mount_uploader :thumb_image, AvatarUploader
  mount_uploader :option_avatar, AvatarUploader

  has_many :option_categories
  accepts_nested_attributes_for :option_categories, :allow_destroy => true
  has_many :upgrade_attachments
  accepts_nested_attributes_for :upgrade_attachments, :allow_destroy => true
  belongs_to :category
  has_and_belongs_to_many :utilities
  has_and_belongs_to_many :industries

  validates :sku, :title, presence: true
  validates :sku, uniqueness: true
  before_save :strip_sku

  def strip_sku
    self.sku = sku.strip
  end

  def self.search(search)      
      where('sku LIKE ?', "%#{search}%")
  end

end
