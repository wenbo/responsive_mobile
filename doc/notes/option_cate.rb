p = Product.find_by_sku "3390"

ocs = OptionCategory.where("option_sku_collection LIKE ?", "%#{p.sku}%")
canceled_ids = [1,2]
ci = OptionCategory.find(canceled_ids)
