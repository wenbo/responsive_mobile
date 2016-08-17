class Admin::OptionsController < Admin::BaseController
  def index
    @options = Option.page(params[:page]).per(20)
  end

  def new
    @option = Option.new
  end

  def create
    @option = Option.new params_option
    @option.avatar = params[:option][:avatar]
    if @option.save
      redirect_to [:admin, :options]
    else
      render 'new'
    end
  end

  def edit
    @option = Option.find params[:id]
  end

  def update
    @option = Option.find params[:id]
    if @option.update_attributes params_option
      redirect_to [:admin, :options]
    else
      render 'edit'
    end
  end

  private
  def params_option
    params.require(:option).permit(:sku, :title, :description)
  end
end
