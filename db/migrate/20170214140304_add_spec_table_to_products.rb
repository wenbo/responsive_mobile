class AddSpecTableToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :spec_table, :text
  end
end
