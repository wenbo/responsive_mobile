class CreateCategories < ActiveRecord::Migration[5.0]
  def change
    create_table :categories do |t|
      t.string :name
      t.string :note
      t.integer :parent_id
      t.integer :lft, :index => true
      t.integer :rgt, :index => true

      t.timestamps
    end
    #add_index :categories, :parent_id
  end
end
