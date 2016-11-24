class CreateContacts < ActiveRecord::Migration[5.0]
  def change
    create_table :contacts do |t|
      t.string :username
      t.string :company_name
      t.string :department
      t.string :address
      t.string :postcode
      t.string :tel
      t.string :fax
      t.string :email
      t.text :content

      t.timestamps
    end
  end
end
