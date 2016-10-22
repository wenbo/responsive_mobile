class NewsController < ApplicationController
  def index
    @news = News.is_public.order("public_time desc").page(params[:page]).per(6)
    @root_categories = Category.roots
  end

  def show
    @news = News.find params[:id]
    @root_categories = Category.roots
  end
end
