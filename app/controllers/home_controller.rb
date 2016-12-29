class HomeController < ApplicationController
  def index
    @news = News.is_public.order("public_time desc").limit(6)
    @root_categories = Category.roots
  end

  def repair
    @root_categories = Category.roots
  end

  def recruit
    @root_categories = Category.roots
  end

  def company
    @root_categories = Category.roots
  end

  def distribution
    @root_categories = Category.roots
  end
  
  def speech
    @root_categories = Category.roots
  end
  
  def history
    @root_categories = Category.roots
  end
  
  def counterfeit
    @counterfeit = Counterfeit.new
    @root_categories = Category.roots
  end

  def contact
    @contact = Contact.new
    @root_categories = Category.roots
  end
end
