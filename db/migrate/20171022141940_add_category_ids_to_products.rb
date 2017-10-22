class AddCategoryIdsToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :category_ids, :string
  end
end
