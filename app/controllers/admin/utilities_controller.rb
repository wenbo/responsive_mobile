class Admin::UtilitiesController < Admin::BaseController
  def index
    @utilities = Utility.page(params[:page]).per(20)
  end

  def new
    @utility = Utility.new
  end

  def show
    @utility = Utility.find(params[:id])
  end

  def create
    @utility = Utility.new params_utility
    if @utility.save
      redirect_to [:admin, :utilities]
    else
      render 'new'
    end
  end

  def edit
    @utility = Utility.find params[:id]
  end

  def update
    @utility = Utility.find params[:id]
    if @utility.update_attributes params_utility
      redirect_to [:admin, :utilities]
    else
      render 'edit'
    end
  end

  def destroy
    @utility = Utility.find params[:id]
    if @utility.delete
      flash[:notice] = "删除成功!"
      redirect_to [:admin, :utilities]
    end
  end

  private
  def params_utility
    params.require(:utility).permit(:title, :description, :link, product_ids: [])
  end
end
