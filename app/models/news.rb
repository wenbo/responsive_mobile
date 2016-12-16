class News < ApplicationRecord
  belongs_to :news_category
  default_scope  -> {order('public_time DESC')}
  scope :is_public, -> { where(is_public: true) }
end
