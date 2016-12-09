# coding: utf-8
class Admin::CategoriesController < Admin::BaseController
  helper_method :sort_column, :sort_direction

  def index
    @categories = Category.unscoped.order(sort_column + " " + sort_direction).page(params[:page]).per(20)
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
    if @category.products.blank? && @category.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :categories]
    end
  end

  private
  def params_category
    params.require(:category).permit(:name, :position, :image, :note, :parent_id, industry_ids: [])
  end

  def sort_column
    Category.column_names.include?(params[:sort]) ? params[:sort] : "id"
  end 

  def sort_direction
    %w[asc desc].include?(params[:direction]) ? params[:direction] : "asc"
  end 
end
