class AddAttachmentAttachmentToUpgradeAttachments < ActiveRecord::Migration
  def self.up
    change_table :upgrade_attachments do |t|
      t.attachment :attachment
    end
  end

  def self.down
    remove_attachment :upgrade_attachments, :attachment
  end
end
