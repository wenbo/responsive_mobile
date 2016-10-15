class AddSkuAndDescToUpgradeAttachments < ActiveRecord::Migration[5.0]
  def change
    add_column :upgrade_attachments, :sku, :string
    add_column :upgrade_attachments, :desc, :string
  end
end
