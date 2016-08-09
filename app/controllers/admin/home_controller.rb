class Admin::HomeController < Admin::BaseController
  def index
    @users = User.all
    @industries = Industry.all
    @categories = Category.all
    @products = Product.all
  end
end
