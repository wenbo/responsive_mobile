class AddVideoPathToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :video_path, :string
  end
end
