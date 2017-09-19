class CreateRegistrations < ActiveRecord::Migration[5.0]
  def change
    create_table :registrations do |t|
      t.integer :h_user_id
      t.string :h_user_email
      t.string :h_user_name
      t.integer :seihin_id
      t.string  :product_number
      t.date    :purchase_on

      t.timestamps
    end
  end
end
