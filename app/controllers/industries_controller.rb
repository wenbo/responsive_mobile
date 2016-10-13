class IndustriesController < ApplicationController
  def show
    # @industry = Industry.find params[:id]
    # @root_categories = Category.roots
    # @root_categories = @industry.categories
    @industries = Industry.find([1,2,3,4,5])
  end
end
