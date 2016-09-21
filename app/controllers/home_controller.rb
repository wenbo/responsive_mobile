class HomeController < ApplicationController
  def index
    @news = News.is_public.order("public_time desc").limit(6)
  end
end
