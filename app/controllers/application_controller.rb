class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception
  helper_method :a_name, :c_name
  before_filter :check_cookie

  def a_name; action_name end
  def c_name; controller_name end

  def check_cookie
    # puts "************ login_stub ************"
    login_stub = cookies[:login_stub]
    if session[:user_name].blank? && login_stub.present?
      decoded = Base64.decode64(login_stub)
      session[:user_id], session[:user_name] = decoded.split(',')
    elsif session[:user_name].present? && login_stub.blank?
      session[:user_name] = nil
    end
  end
end
