class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.string :sku
      t.string :title
      t.string :banner
      t.string :feature
      t.string :desc_as_option
      t.string :red_desc_as_option
      t.string :option_avatar
      t.text :summary
      t.text :upgraded
      t.boolean :is_new
      t.boolean :is_main_body
      t.boolean :is_option
      t.boolean :is_display
      t.boolean :is_recommended

      t.timestamps
    end
    add_index :products, :sku
  end
end
