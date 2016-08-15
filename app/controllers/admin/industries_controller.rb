class Admin::IndustriesController < Admin::BaseController
  def index
    @industries = Industry.page(params[:page]).per(20)
  end

  def new
    @industry = Industry.new
  end

  def create
    @industry = Industry.new params_industry
    if @industry.save
      redirect_to [:admin, :industries]
    else
      render 'new'
    end
  end

  def edit
    @industry = Industry.find params[:id]
  end

  def update
    @industry = Industry.find params[:id]
    if @industry.update_attributes params_industry
      redirect_to [:admin, :industries]
    else
      render 'edit'
    end
  end

  private
  def params_industry
    params.require(:industry).permit(:name, :number, :note, :parent_id)
  end
end
