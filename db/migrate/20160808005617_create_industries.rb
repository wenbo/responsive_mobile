class CreateIndustries < ActiveRecord::Migration[5.0]
  def change
    create_table :industries do |t|
      t.string :name
      t.string :note
      t.integer :parent_id

      t.timestamps
    end

    add_index :industries, :parent_id

  end
end
