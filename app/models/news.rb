class News < ApplicationRecord
  belongs_to :news_category
  default_scope  -> {order('created_at DESC')}
  scope :is_public, -> { where(is_public: true) }
end
