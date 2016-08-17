class Admin::CategoriesController < Admin::BaseController
  def index
    @categories = Category.page(params[:page]).per(20)
  end

  def new
    @category = Category.new
  end

  def create
    @category = Category.new params_category
    if @category.save
      redirect_to [:admin, :categories]
    else
      render 'new'
    end
  end

  def edit
    @category = Category.find params[:id]
  end

  def update
    @category = Category.find params[:id]
    if @category.update_attributes params_category
      redirect_to [:admin, :categories]
    else
      render 'edit'
    end
  end

  private
  def params_category
    params.require(:category).permit(:name, :note, :parent_id)
  end
end
