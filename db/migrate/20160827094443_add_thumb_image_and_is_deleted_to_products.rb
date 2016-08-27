class AddThumbImageAndIsDeletedToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :thumb_image, :string
    add_column :products, :is_deleted, :boolean
  end
end
