class Seihin < ApplicationRecord
  def self.search(search)      
    where("product_name LIKE :search OR product_model_name LIKE :search", {search: "%#{search}%"})
  end
end
