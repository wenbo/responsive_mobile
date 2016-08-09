class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception
  helper_method :a_name, :c_name

  def a_name; action_name end
  def c_name; controller_name end
end
