# coding: utf-8
class Admin::FaqsController < Admin::BaseController
  def index
    @faqs = Faq.page(params[:page]).per(20)
  end

  def new
    @faq = Faq.new
  end

  def create
    @faq = Faq.new params_faq
    if @faq.save
      flash[:notice] = "保存成功"
      redirect_to admin_faqs_path
    else
      render 'new'
    end
  end

  def edit
    @faq = Faq.find params[:id]
  end

  def update
    @faq = Faq.find params[:id]
    if @faq.update_attributes params_faq
      flash[:notice] = "更新成功"
      redirect_to edit_admin_faq_path(@faq)
    else
      render 'edit'
    end
  end

  def destroy
    @faq = Faq.find params[:id]
    if @faq.delete
      flash[:notice] = "Faq #{@faq.id} 删除成功!"
      redirect_to admin_faq_path
    end
  end


  private
  def params_faq
    params.require(:faq).permit(:name, :faq_category_id, :body, :public_time)
  end
end
