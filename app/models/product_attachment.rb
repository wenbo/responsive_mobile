class ProductAttachment < ApplicationRecord
  belongs_to :pdf_category
  has_attached_file :pdf, styles: {thumbnail: ["60x60#", :png]}
  validates_attachment :pdf, content_type: { content_type: "application/pdf" }
  has_and_belongs_to_many :products
end
