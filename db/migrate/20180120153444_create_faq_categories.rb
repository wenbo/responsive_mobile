class CreateFaqCategories < ActiveRecord::Migration[5.0]
  def change
    create_table :faq_categories do |t|
      t.string :name
      t.integer :position
      t.integer  :lft
      t.integer  :rgt
      t.integer :parent_id
      t.references :category, foreign_key: true
      t.attachment :avatar

      t.timestamps
    end
  end
end
