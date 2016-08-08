class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.string :name
      t.string :banner
      t.string :feature
      t.string :desc_as_option
      t.string :red_desc_as_option
      t.text :summary
      t.text :upgraded
      t.boolean :is_new
      t.boolean :is_recommended

      t.timestamps
    end
    add_index :products, :name
  end
end
