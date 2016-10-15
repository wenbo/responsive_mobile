class AddVisitedCountToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :visited_count, :integer
  end
end
