class RegistrationsController < ApplicationController
  protect_from_forgery :except => ["search_ajax"]

  def new
    @root_categories = Category.roots
    @h_user = HUser.find(session[:user_id])
  end
  def search_ajax
  end
end
