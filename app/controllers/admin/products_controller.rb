# coding: utf-8
class Admin::ProductsController < Admin::BaseController
  helper_method :sort_column, :sort_direction
  
  def index
    @products = Product.search(params[:search]).order(sort_column + " " + sort_direction).page(params[:page]).per(20)
  end

  def new
    @product = Product.new
    #@option_categories = @product.option_categories.build
  end

  def create
    @product = Product.new params_product
    if @product.save
      flash[:notice] = "保存成功"
      redirect_to [:edit, :admin, @product]
    else
      #debugger
      render 'new'
    end
  end

  def edit
    @product = Product.find params[:id]
    @option_categories = @product.option_categories
    @upgrade_attachments = @product.upgrade_attachments
  end

  def update
    @product = Product.find params[:id]
    if @product.update_attributes params_product
      flash[:notice] = "更新成功"
      redirect_to [:edit, :admin, @product]
    else
      render 'edit'
    end
  end

  def destroy
    @product = Product.find params[:id]
    if @product.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :products]
    end
  end

  def show
  end

  private
  def params_product
    params.require(:product).permit(:sku, :title, :feature, :note_for_option, :desc, :video_path, :is_main_body, :is_option, :is_new, :is_recommended, :is_display, :is_deleted, :banner, :thumb_image, :option_avatar, :summary, :upgraded, :category_id, option_categories_attributes: [:name, :note, :option_sku_collection, :_destroy, :id], upgrade_attachments_attributes: [:sku, :name, :desc, :attachment, :classifier_id, :_destroy, :id], industry_ids: [])
  end

  def sort_column
    Product.column_names.include?(params[:sort]) ? params[:sort] : "id"
  end 
    
  def sort_direction
    %w[asc desc].include?(params[:direction]) ? params[:direction] : "asc"
  end 
end
