p = Product.find_by_sku "3390"

ocs = OptionCategory.where("option_sku_collection LIKE ?", "%#{p.sku}%")
canceled_ids = [1,2]
ci = OptionCategory.find(canceled_ids)

option_category_ids = ["1_3390", "2_3390", "2_3390", "3_8861-50", "3_8861-50"]
hash = {}
option_category_ids.each do |ele|
  hash[ele] += 1 if hash[ele].present?
  hash[ele] = 1 if hash[ele].blank?
end
cancel_ele = hash.select do |k,v| v == 1 end
