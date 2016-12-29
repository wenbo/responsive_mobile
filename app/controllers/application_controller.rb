class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception
  helper_method :a_name, :c_name
  before_filter :check_cookie, :set_title

  def a_name; action_name end
  def c_name; controller_name end

  def set_title
    case controller_name
    when "home"
        @title = {index: "首页", company: "公司概要", distribution: "公司分布", speech: "董事致辞", history: "公司沿革", repair: "维修中心", recruit: "招聘信息", contact: "联系我们", counterfeit: "伪造品提示"}[action_name.to_sym]
    when "news"
        @title = {index: "新闻", show: "新闻"}[action_name.to_sym]
    when "industries"
        @title = {index: "业界商品分类", show: "产品一览", products: "产品一览"}[action_name.to_sym]
    when "categories"
        @title = {index: "产品一览", show: "产品一览"}[action_name.to_sym]
    when "products"
        @title = {index: "产品一览", show: "产品一览"}[action_name.to_sym]
    end
  end

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
