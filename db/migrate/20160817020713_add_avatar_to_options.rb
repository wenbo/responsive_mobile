class AddAvatarToOptions < ActiveRecord::Migration[5.0]
  def change
    add_column :options, :avatar, :string
  end
end
