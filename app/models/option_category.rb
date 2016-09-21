class OptionCategory < ApplicationRecord
  belongs_to :product
  
  def options
    skus = self.option_sku_collection
    options = []
    skus.split(",").each do |sku|
      option = Product.find_by_sku(sku)
      options << option if option.present?
    end
    options
  end
end
