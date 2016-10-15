class CategoriesController < ApplicationController
  def show
    @category = Category.find params[:id]
    @category_parent = @category.parent
    if params[:search].present?
      @products = Product.category_all_products(@category).search(params[:search]).ordered.is_display.is_main_body.page(params[:page])
    else
      @products = Product.category_all_products(@category).ordered.is_display.is_main_body.page(params[:page]).per(20)
    end
    @root_categories = Category.roots
  end
end
