class Faq < ApplicationRecord
  belongs_to :faq_category
  default_scope  -> {order('public_time DESC')}
end
