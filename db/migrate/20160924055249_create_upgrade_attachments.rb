class CreateUpgradeAttachments < ActiveRecord::Migration[5.0]
  def change
    create_table :upgrade_attachments do |t|
      t.string :name
      t.references :product, foreign_key: true
      t.integer :classifier_id

      t.timestamps
    end
  end
end
