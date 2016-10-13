class ProductAccessRecord < ApplicationRecord
  scope :category_most_visited_products, -> (category) {  where(["product_access_records.category_id in (?)", (category.self_and_descendants_id)]).order('visited_count desc').limit(4) }  
  belongs_to :product
  belongs_to :category
end
