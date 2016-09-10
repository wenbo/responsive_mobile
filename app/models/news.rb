class News < ApplicationRecord
  belongs_to :news_category
  default_scope  -> {order('created_at DESC')}
end
