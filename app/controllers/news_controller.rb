class NewsController < ApplicationController
  def index
    @news = News.is_public.order("public_time desc").page(params[:page]).per(6)
  end

  def show
    @news = News.find params[:id]
  end
end
