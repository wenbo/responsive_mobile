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
    canceled_ids = OptionCategory.where("option_sku_collection LIKE ?", "%#{@product.sku}%").map(&:id) - option_category_ids
    puts canceled_ids
    ocs = OptionCategory.find(canceled_ids)
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
