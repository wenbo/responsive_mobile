class FaqCategory < ApplicationRecord
  belongs_to :category
  has_many :faqs
  default_scope  -> {order('position ASC')}
  validates :position, uniqueness: true
  validates :name, uniqueness: { scope: :parent_id }

  acts_as_nested_set
  has_attached_file :avatar,
    :styles => {:w50h50 => "50x50>"},
    :url => "/system/faq_categories/:id/:style.:extension",
    :path => ":rails_root/public/system/faq_categories/:id/:style.:extension"
  validates_attachment_content_type :avatar, content_type: [/\Aimage/, "application/octet-stream"]

  def self_and_descendants_id
    self_and_descendants.map(&:id)  
  end
end
