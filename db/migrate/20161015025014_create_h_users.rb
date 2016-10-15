class CreateHUsers < ActiveRecord::Migration[5.0]
  def change
    create_table :h_users do |t|

      t.timestamps
    end
  end
end
