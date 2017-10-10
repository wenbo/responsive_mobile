class RegistrationsController < ApplicationController
  before_filter :current_user
  protect_from_forgery :except => ["search_ajax"]

  def new
    @root_categories = Category.roots
    @h_user = HUser.find(session[:user_id])
    @registration = Registration.new
    @registrations = @h_user.registrations
  end

  def search_ajax
    @seihins = Seihin.search(params[:search_word])
  end

  def create 
    @seihin = Seihin.find_by(product_model_name: params[:product_model_name])
    h_user = HUser.find(session[:user_id])
    @registration = Registration.new(
      seihin_id: @seihin.id,
      h_user_id: h_user.id,
      h_user_email: h_user.email,
      h_user_name: h_user.name,
      product_number: params[:serial_number],
      purchase_on: params[:buy_date]
    )
    @registration.save
    redirect_to "/products/registration/"
  end

  def destroy
    @registration = Registration.find params[:id]
    if @registration.delete
      redirect_to "/products/registration/"
    end
  end
  
  def current_user
     redirect_to "/" if session[:user_name].blank?
  end

end
