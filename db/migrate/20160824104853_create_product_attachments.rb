class CreateProductAttachments < ActiveRecord::Migration[5.0]
  def change
    create_table :product_attachments do |t|
      t.string :name
      t.string :note
      t.references :pdf_category, foreign_key: true

      t.timestamps
    end
  end
end
