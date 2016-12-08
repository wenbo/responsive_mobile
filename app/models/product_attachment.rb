class ProductAttachment < ApplicationRecord
  scope :exclude_english, -> {where("name not like '%英文%'")}
  belongs_to :pdf_category
  has_attached_file :pdf, styles: {thumbnail: ["60x60#", :png]}
  #validates_attachment :pdf, content_type: { content_type: "application/pdf" }
  has_and_belongs_to_many :products
  do_not_validate_attachment_file_type :pdf
  before_post_process :skip_for_zip

  def skip_for_zip
    !%w(application/zip application/x-zip application/pdf application/octet-stream).include?(pdf_content_type)
  end

  def self.search(search)      
    where("name LIKE :search", {search: "%#{search}%"})
  end
end
