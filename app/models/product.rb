# coding: utf-8
require File.join(Rails.root, "app/uploaders/avatar_uploader.rb")
class Product < ApplicationRecord
  UpgradeClassifier = [["下载软件", 1], ["操作说明书", 2]]
  scope :ordered, -> {order('created_at DESC')} #{order(is_recommended: :desc, is_new: :desc)}
  scope :ordered, -> {order(is_recommended: :desc, is_new: :desc, position: :asc, visited_count: :desc)}
  scope :options, -> { where(is_option: true) }
  scope :is_display, -> { where(is_display: true, is_deleted: false) }
  scope :include_deleted, -> { where(is_display: true) }
  scope :is_main_body, -> { where(is_main_body: true) }
  scope :category_all_products, -> (category) {  where(["products.category_id in (?)", (category.self_and_descendants_id)]) }

# http://bashalog.c-brains.jp/15/09/29-100000.php
  # scope :category_ids_all_products, -> (category) {  where(["￥products.category_ids REGEXP CONCAT("(^|,)", ma.id, "(,|$)") (?)", (category.self_and_descendants_id)]) }

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
  has_and_belongs_to_many :product_attachments
  has_many :prod_categories
  has_many :categories, through: :prod_categories

  validates :sku, :title, presence: true
  before_save :strip_sku

  def strip_sku
    self.sku = sku.strip
  end

  def option_no_products
    OptionCategory.where("option_sku_collection LIKE ?", "%#{sku}%").map(&:product).uniq
  end

  def category_parent_position
    if category.parent.present?
      category.parent.position
    else
      category.position
    end
  end

  def self.search(search)      
    where("sku LIKE :search OR title LIKE :search OR search_keywords LIKE :search", {search: "%#{search}%"})
  end

  def related_products
    category = self.category.root
    product_ids = ProductAccessRecord.category_most_visited_products(category).map(&:product_id)
    product_ids.delete(self.id)
    related = Product.is_display.where(id: product_ids)[0..2]
  end

  def visited
    self.increment(:visited_count)
    self.save
    record = ProductAccessRecord.find_by(product_id: self.id, category_id: self.category_id)
    if record.present?
      record.visited_count += 1
      record.save
    else
      record = ProductAccessRecord.create(
        product_id: self.id,
        category_id: self.category_id,
        visited_count: 1
      )
    end
  end

  def category_ids_arr
    self.category_ids
  end

  def category_ids_arr=(arr)
    self.category_ids = arr.reject(&:blank?)
    # category_ids_array = arr.reject(&:blank?)
    # category_ids_array.each do |cate_id|
    #   self.prod_categories.build(
    #     category_id: cate_id
    #   )
    # end
  end

  def category_ids_arr_names
    begin
      Category.find(self.category_ids).map(&:name).join(" ")
    rescue
      category.try(name)
    end
  end

end
