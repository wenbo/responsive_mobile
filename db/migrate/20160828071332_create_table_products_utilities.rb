class CreateTableProductsUtilities < ActiveRecord::Migration[5.0]
  def change
    create_table :products_utilities, id: false do |t|
      t.integer :product_id
      t.integer :utility_id
    end
    add_index :products_utilities, :product_id
    add_index :products_utilities, :utility_id
  end
end
