class Admin::ProductsController < Admin::BaseController
  def index
    @products = Product.page(params[:page]).per(20)
  end

  def new
    @product = Product.new
  end

  def create
    @product = Product.new params_product
    if @product.save
      redirect_to [:admin, :products]
    else
      render 'new'
    end
  end

  def edit
    @product = Product.find params[:id]
  end

  def update
    @product = Product.find params[:id]
    if @product.update_attributes params_product
      redirect_to [:admin, :products]
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
    params.require(:product).permit(:sku, :title, :feature, :desc_as_option, :is_main_body, :is_option, :is_new, :is_recommended, :banner, :summary)
  end
end
