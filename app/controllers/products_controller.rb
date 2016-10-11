class ProductsController < ApplicationController
  def index
    if params[:search].present?
      @products = Product.search(params[:search]).is_display.is_main_body
    else
      @products = Product.is_display.is_main_body
    end
    @root_categories = Category.roots
  end

  def show
    @root_categories = Category.roots
    @product = Product.find params[:id]
  end
end
