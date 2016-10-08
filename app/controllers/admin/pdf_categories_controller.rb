# coding: utf-8
class Admin::PdfCategoriesController < Admin::BaseController
  def index
    @pdf_categories = PdfCategory.page(params[:page]).per(20)
  end

  def new
    @pdf_category = PdfCategory.new
  end

  def create
    @pdf_category = PdfCategory.new params_pdf_category
    if @pdf_category.save
      redirect_to [:admin, :pdf_categories]
    else
      render 'new'
    end
  end

  def edit
    @pdf_category = PdfCategory.find params[:id]
  end

  def update
    @pdf_category = PdfCategory.find params[:id]
    if @pdf_category.update_attributes params_pdf_category
      redirect_to [:admin, :pdf_categories]
    else
      render 'edit'
    end
  end
  
  def destroy
    @pdf_category = PdfCategory.find params[:id]
    if @pdf_category.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :pdf_categories]
    end
  end

  private
  def params_pdf_category
    params.require(:pdf_category).permit(:name, :note, :parent_id)
  end
end
