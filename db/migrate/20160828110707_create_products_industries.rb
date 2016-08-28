class CreateProductsIndustries < ActiveRecord::Migration[5.0]
  def change
    create_table :industries_products do |t|
      t.integer :product_id
      t.integer :industry_id
    end
    add_index :industries_products, :product_id
    add_index :industries_products, :industry_id
  end
end
