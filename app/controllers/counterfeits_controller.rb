# coding: utf-8
class CounterfeitsController < ApplicationController
  skip_before_filter :verify_authenticity_token
  
  def create
    @root_categories = Category.roots
    @counterfeit = Counterfeit.new(params_counterfeit)
    if @counterfeit.save
      flash[:notice] = "我们会尽快给您回复，请耐心等待"
      UserMailer.counterfeit_email(@counterfeit).deliver_now
      redirect_to "/counterfeit"
    end
  end
  
  private
  def params_counterfeit
    params.require(:counterfeit).permit(:sku, :serial_number, :username, :unit_name, :address, :tel, :email)
  end
  
end
