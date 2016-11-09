class AddPositionToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :position, :integer, default: 99999
  end
end
