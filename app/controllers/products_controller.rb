class ProductsController < ApplicationController
  def index
    @root_categories = Category.roots
    if params[:search].present?
      if params[:is_deleted].present?
        @products = Product.search(params[:search]).include_deleted
      else
        @products = Product.search(params[:search]).is_display
      end
      render :search
    else
      @products = Product.ordered.is_display.is_main_body
      
      recommended_products = @products.select do |pro| pro.is_recommended end.sort_by do |pro| [pro.category_parent_position, pro.category.position, pro.position] end || []
      new_products = @products.select do |pro| pro.is_new end.sort_by do |pro| [pro.category_parent_position, pro.category.position, pro.position] end
      remains = (@products - recommended_products - new_products).sort_by do |pro| [pro.category_parent_position, pro.category.position, pro.position] end
      @products = recommended_products + new_products + remains

      # @products = Product.find_by_sql("SELECT * FROM `products` LEFT OUTER JOIN `categories` ON `categories`.`id` = `products`.`category_id` WHERE `products`.`is_display` = 1 AND `products`.`is_deleted` = 0 AND `products`.`is_main_body` = 1 ORDER BY is_recommended desc, is_new desc, categories.position asc, products.position asc, visited_count desc")
    end
  end

  def product
    @root_categories = Category.roots
  end

  def show
    @root_categories = Category.roots
    @product = Product.find params[:id]
    @title = @product.title
    @product.visited
    @spec_table = @product.spec_table
    @utilities = @product.utilities
    @option_categories = @product.option_categories 
    @related_products = @product.related_products
  end
end
