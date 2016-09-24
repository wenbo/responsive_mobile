class UpgradeAttachment < ApplicationRecord
  belongs_to :product
  has_attached_file :attachment, styles: {thumbnail: ["60x60#", :png]}
  validates_attachment :attachment, content_type: { content_type: ["application/pdf", "application/zip"] }
  before_post_process :skip_for_zip

  def skip_for_zip
    !%w(application/zip application/x-zip application/pdf).include?(attachment_content_type)
  end
end
