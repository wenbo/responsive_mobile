class ProductsController < ApplicationController
  def index
    @root_categories = Category.roots
    if params[:search].present?
      @products = Product.search(params[:search]).is_display.is_main_body
      render :search
    else
      @products = Product.ordered.is_display.is_main_body
    end
  end

  def product
    @root_categories = Category.roots
  end

  def show
    @root_categories = Category.roots
    @product = Product.find params[:id]
    @product.visited
    @related_products = @product.related_products
  end
end
