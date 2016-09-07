class CreateNews < ActiveRecord::Migration[5.0]
  def change
    create_table :news do |t|
      t.string :name
      t.references :news_category, foreign_key: true
      t.text :content
      t.boolean :is_public
      t.datetime :public_time

      t.timestamps
    end
  end
end
