class CreateProductAccessRecords < ActiveRecord::Migration[5.0]
  def change
    create_table :product_access_records do |t|
      t.references :product, foreign_key: true
      t.references :category, foreign_key: true
      t.integer :visited_count

      t.timestamps
    end
  end
end
