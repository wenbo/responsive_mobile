# coding: utf-8
class Admin::FaqCategoriesController < Admin::BaseController
  helper_method :sort_column, :sort_direction

  def index
    @faq_categories = FaqCategory.order(sort_column + " " + sort_direction).page(params[:page]).per(20)
  end

  def new
    @faq_category = FaqCategory.new
  end

  def create
    @faq_category = FaqCategory.new params_faq_category
    if @faq_category.save
      redirect_to [:admin, :faq_categories]
    else
      render 'new'
    end
  end

  def edit
    @faq_category = FaqCategory.find params[:id]
  end

  def update
    @faq_category = FaqCategory.find params[:id]
    if @faq_category.update_attributes params_faq_category
      redirect_to [:admin, :faq_categories]
    else
      render 'edit'
    end
  end

  def destroy
    @faq_category = FaqCategory.find params[:id]
    if @faq_category.faqs.blank? && @faq_category.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :faq_categories]
    else
      flash[:notice] = "该分类下有产品，故无法删除!"
      redirect_to [:admin, :faq_categories]
    end
  end

  private
  def params_faq_category
    params.require(:faq_category).permit(:name, :position, :avatar, :note, :parent_id, :category_id)
  end

  def sort_column
    FaqCategory.column_names.include?(params[:sort]) ? params[:sort] : "id"
  end 

  def sort_direction
    %w[asc desc].include?(params[:direction]) ? params[:direction] : "asc"
  end 
end
