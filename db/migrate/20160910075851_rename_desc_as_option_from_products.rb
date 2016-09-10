class RenameDescAsOptionFromProducts < ActiveRecord::Migration[5.0]
  def change
    rename_column :products, :desc_as_option, :desc
  end
end
