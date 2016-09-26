class CategoriesController < ApplicationController
  def show
    @category = Category.find params[:id]
    if params[:search].present?
      @products = Product.category_all_products(@category).search(params[:search]).is_display.is_main_body.page(params[:page]).per(20)
    else
      @products = Product.category_all_products(@category).is_display.is_main_body.page(params[:page]).per(20)
    end
    @root_categories = Category.roots
  end
end
