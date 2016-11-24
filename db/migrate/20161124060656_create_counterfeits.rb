class CreateCounterfeits < ActiveRecord::Migration[5.0]
  def change
    create_table :counterfeits do |t|
      t.string :sku
      t.string :serial_number
      t.string :username
      t.string :unit_name
      t.string :address
      t.string :tel
      t.string :email
      t.text :content

      t.timestamps
    end
  end
end
