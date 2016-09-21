class NewsCategoriesController < ApplicationController
  def show
    @news_category = NewsCategory.find params[:id]
    @news = @news_category.news
  end
end
