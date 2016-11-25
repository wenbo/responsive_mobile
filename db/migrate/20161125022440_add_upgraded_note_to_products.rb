class AddUpgradedNoteToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :upgraded_note, :text
  end
end
