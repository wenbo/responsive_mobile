class CreateProductAttachmentsProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :product_attachments_products, id: false do |t|
      t.integer :product_id
      t.integer :product_attachment_id
    end
    add_index :product_attachments_products, :product_id
    add_index :product_attachments_products, :product_attachment_id
  end
end
