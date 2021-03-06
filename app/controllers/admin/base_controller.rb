# coding: utf-8
class Admin::BaseController < ApplicationController
  include SimpleCaptcha::ControllerHelpers
  before_action :valid_access
  layout "admin"

  def session_user
    _id = session[:admin_user_id]
    @session_user ||= User.find_by(id: _id) if _id.present?
    return @session_user if @session_user.present?

    if cookies.signed[:user].present?
      if @session_user = User.validate_cookie(cookies.signed[:user])
        session[:admin_user_id] = @session_user.id.to_s
        return @session_user
      end
    end
  end
  helper_method :session_user

  # alias methods
  def a_name; action_name end
  def c_name; controller_name end

  private
  def valid_access
    ActiveRecord::Base.connection.execute "SET FOREIGN_KEY_CHECKS=0;"
    return redirect_to([:admin, :login]) unless session_user.present?
  end

end
