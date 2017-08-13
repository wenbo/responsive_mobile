class AddPositionToOptionCategories < ActiveRecord::Migration[5.0]
  def change
    add_column :option_categories, :position, :integer, default: 99999
  end
end
