class CreateCategoriesIndustries < ActiveRecord::Migration[5.0]
  def change
    create_table :categories_industries do |t|
      t.integer :category_id
      t.integer :industry_id
    end
    add_index :categories_industries, :category_id
    add_index :categories_industries, :industry_id
  end
end
