class CategoriesController < ApplicationController
  def show
    @category = Category.find params[:id]
    if params[:search].present?
      @products = @cateogry.products.search(params[:search]).is_display.is_main_body.page(params[:page]).per(20)
    else
      @products = @category.products.is_display.is_main_body.page(params[:page]).per(20)
    end
    @root_categories = Category.roots
  end
end
