class UpgradeAttachment < ApplicationRecord
  belongs_to :product
  has_attached_file :attachment, styles: {thumbnail: ["60x60#", :png]}
  # validates_attachment :attachment, content_type: { content_type: ["application/pdf", "application/zip", "application/octet-stream"] }
  validates_attachment_size :attachment, less_than: 100.megabytes
  # validates_attachment_presence :attachment
  do_not_validate_attachment_file_type :attachment
  before_post_process :skip_for_zip

  def skip_for_zip
    !%w(application/zip application/x-zip application/pdf application/octet-stream).include?(attachment_content_type)
  end
end
