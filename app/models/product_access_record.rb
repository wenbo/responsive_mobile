class ProductAccessRecord < ApplicationRecord
  scope :ordered, -> {order('count desc')}
  belongs_to :product
  belongs_to :category
end
