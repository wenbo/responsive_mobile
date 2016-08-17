class CreateOptions < ActiveRecord::Migration[5.0]
  def change
    create_table :options do |t|
      t.string :sku
      t.string :title
      t.text   :description

      t.timestamps
    end
    add_index :options, :sku
  end
end
