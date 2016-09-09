class Admin::OptionsController < Admin::BaseController
  def index
    @products = Product.options.search(params[:search]).order(sort_column + " " + sort_direction).page(params[:page]).per(20)
  end

  def edit
    @product = Product.find params[:id]
    @option_categories = @product.option_categories
  end

  def update
    @product = Product.find params[:id]
    option_category_ids = params[:product][:option_category_ids]
    hash = {}
    option_category_ids.each do |ele|
      hash[ele] += 1 if hash[ele].present?
      hash[ele] = 1 if hash[ele].blank?
    end
    cancel_ele = hash.select do |k,v| v == 1 end #{"1_3390"=>1} 
    puts '******'
    puts cancel_ele

    cancel_ele.keys.each do |ele|
      oc_id, pro_sku = ele.split("_")
      oc = OptionCategory.find oc_id
      option_sku_collection_arr = oc.option_sku_collection.split(",")
      option_sku_collection_arr.delete(@product.sku)
      oc.update_attribute(:option_sku_collection, option_sku_collection_arr.join(","))
    end

    if true 
      redirect_to "/admin/options/#{@product.id}/edit"
    else
      render 'edit'
    end
  end

  def destroy
  end

  def show
  end

  private
  def params_product
    params.require(:product).permit(:sku, option_category_ids: [])
  end

  def sort_column
    Product.column_names.include?(params[:sort]) ? params[:sort] : "id"
  end 
    
  def sort_direction
    %w[asc desc].include?(params[:direction]) ? params[:direction] : "asc"
  end 
end
