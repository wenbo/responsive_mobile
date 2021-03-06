# coding: utf-8
class Admin::SessionsController < Admin::BaseController
  before_action :valid_logged, only: [:new, :create]
  skip_before_action :valid_access, only: [:new, :create]
  layout false

  def new
  end

  def create
    @user = User.find_by username: params[:username]
    flash[:notice] = "用户名或密码错误，请检查！"

    return render('new') if @user.nil?
    return render('new') if @user.password != params[:password]
    if !simple_captcha_valid?
      flash[:notice] = "验证码输入有误"
      return render("new")
    end
    # return render('new') if  code_valid?
    
    session[:admin_user_id] = @user.id.to_s
    if params[:remember_me]
      cookies.signed[:user] = {
        value:  @user.encrypt_cookie_value,
        expires: 5.day.from_now.utc
      }
    end
    flash[:notice] = nil
    cookies[:admin] = {
      value: @user.username,
	    expires: 1.day.from_now,
	    path: '/usercenter/admin/'
    }
    redirect_to [:admin, :root]
  end

  def destroy
    cookies.delete(:user)
    cookies.delete(:admin, path: "/usercenter/admin/")
    cookies[:admin] = {
      value: "",
	    expires: 1.day.ago,
	    path: '/usercenter/admin/'
    }
    session[:admin_user_id] = nil
    redirect_to [:admin, :login]
  end

  private
  def valid_logged
    redirect_to [:admin, :root] if session_user.present?
  end

end

