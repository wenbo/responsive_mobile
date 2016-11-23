class HomeController < ApplicationController
  def index
    @news = News.is_public.order("public_time desc").limit(6)
    @root_categories = Category.roots
  end

  def repair
  end

  def company
    @root_categories = Category.roots
  end

  def contact
  end
end
