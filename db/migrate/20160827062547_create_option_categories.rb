class CreateOptionCategories < ActiveRecord::Migration[5.0]
  def change
    create_table :option_categories do |t|
      t.string :name
      t.string :note
      t.string :option_sku_collection
      t.references :product, foreign_key: true

      t.timestamps
    end
  end
end
