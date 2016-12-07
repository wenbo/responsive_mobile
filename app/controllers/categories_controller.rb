class CategoriesController < ApplicationController
  def show
    @category = Category.find params[:id]
    @title = @category.name
    if params[:industry_id].present?
      industry_ids = Industry.find(params[:industry_id]).children.map(&:id)
      @products_in_industry = industry_ids.collect do |industry_id| Industry.find(industry_id).products end.flatten
    end

    @category_parent = @category.parent
    if params[:search].present?
      @products = Product.category_all_products(@category).search(params[:search]).ordered.is_display.is_main_body
    else
      @products = Product.category_all_products(@category).ordered.is_display.is_main_body
    end
    @products = (@products & @products_in_industry) if @products_in_industry.present?
    @root_categories = Category.roots
  end
end
