class AddAttachmentImageToNewsCategories < ActiveRecord::Migration
  def self.up
    change_table :news_categories do |t|
      t.attachment :image
    end
  end

  def self.down
    remove_attachment :news_categories, :image
  end
end
