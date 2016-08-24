class CreatePdfCategories < ActiveRecord::Migration[5.0]
  def change
    create_table :pdf_categories do |t|
      t.string :name
      t.string :note
      t.integer :parent_id

      t.timestamps
    end
    add_index :pdf_categories, :parent_id
  end
end
