# coding: utf-8
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

  def destroy
    @category = Category.find params[:id]
    if @category.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :categories]
    end
  end


  private
  def params_category
    params.require(:category).permit(:name, :image, :note, :parent_id, industry_ids: [])
  end
end
