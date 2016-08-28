class CreateUtilities < ActiveRecord::Migration[5.0]
  def change
    create_table :utilities do |t|
      t.string :title
      t.string :description
      t.string :link

      t.timestamps
    end
  end
end
