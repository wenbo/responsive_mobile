class CreateSeihins < ActiveRecord::Migration[5.0]
  def change
    create_table :seihins do |t|
      t.string :product_name
      t.string :product_model_name
      t.string :note

      t.timestamps
    end
  end
end
