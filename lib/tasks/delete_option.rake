# coding: utf-8
desc "delete option that from rake db:seed"
task "delete:option" => :environment do
  Product.options.each do |option|
    if option.title.include?("内存扩展板") && option.sku.include?("339")
      oc =  OptionCategory.where("option_sku_collection LIKE ?", "%#{option.sku}%")
      if oc.present?
        # puts option.sku
        oc.each do |oc|
          # puts oc.product.sku
          # puts oc.option_sku_collection
        end
      else
        puts option.sku
        option.delete if !option.is_main_body
      end
    end
  end
end
