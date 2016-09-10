class AddNoteForOptionToProducts < ActiveRecord::Migration[5.0]
  def change
    add_column :products, :note_for_option, :string
  end
end
