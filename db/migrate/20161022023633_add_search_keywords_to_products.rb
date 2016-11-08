class AddSearchKeywordsToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :search_keywords, :string
  end
end
