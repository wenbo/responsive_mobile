class Admin::NewsController < Admin::BaseController
  def index
    @newss = News.page(params[:page]).per(20)
  end

  def new
    @news = News.new
  end

  def create
    @news = News.new params_news
    if @news.save
      flash[:notice] = "保存成功"
      redirect_to admin_news_index_path
    else
      render 'new'
    end
  end

  def edit
    @news = News.find params[:id]
  end

  def update
    @news = News.find params[:id]
    if @news.update_attributes params_news
      flash[:notice] = "更新成功"
      redirect_to edit_admin_news_path(@news)
    else
      render 'edit'
    end
  end

  private
  def params_news
    params.require(:news).permit(:name, :news_category_id, :content, :is_public, :public_time)
  end
end
