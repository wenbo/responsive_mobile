class ProductsController < ApplicationController
  def index
    @products = Product.is_display.is_main_body.page(params[:page]).per(20)
    @root_categories = Category.roots
  end

  def show
    @product = Product.find params[:id]
  end
end
