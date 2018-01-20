class CreateFaqs < ActiveRecord::Migration[5.0]
  def change
    create_table :faqs do |t|
      t.string :name
      t.text :body
      t.references :faq_category, foreign_key: true
      t.date :public_time

      t.timestamps
    end
  end
end
