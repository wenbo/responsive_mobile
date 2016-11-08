class IndustriesController < ApplicationController
  def show
    # @industry = Industry.find params[:id]
    # @root_categories = Category.roots
    @root_categories = Category.roots
    @industries = Industry.ordered.roots
  end
end
