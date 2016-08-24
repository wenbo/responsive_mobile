class AddAttachmentPdfToProductAttachments < ActiveRecord::Migration
  def self.up
    change_table :product_attachments do |t|
      t.attachment :pdf
    end
  end

  def self.down
    remove_attachment :product_attachments, :pdf
  end
end
