class Admin::NewsCategoriesController < Admin::BaseController
  def index
    @news_categories = NewsCategory.page(params[:page]).per(20)
  end

  def new
    @news_category = NewsCategory.new
  end

  def create
    @news_category = NewsCategory.new params_news_category
    if @news_category.save
      redirect_to [:admin, :news_categories]
    else
      render 'new'
    end
  end

  def edit
    @news_category = NewsCategory.find params[:id]
  end

  def update
    @news_category = NewsCategory.find params[:id]
    if @news_category.update_attributes params_news_category
      redirect_to [:admin, :news_categories]
    else
      render 'edit'
    end
  end

  private
  def params_news_category
    params.require(:news_category).permit(:name, :image)
  end
end
