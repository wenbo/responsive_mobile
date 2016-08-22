class Admin::ProductsController < Admin::BaseController
  def index
    @products = Product.page(params[:page]).per(20)
  end

  def new
    @product = Product.new
  end

  def crete
  end

  def edit
  end

  def update
  end

  def destroy
  end

  def show
  end
end
