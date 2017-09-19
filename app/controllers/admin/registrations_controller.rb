class Admin::RegistrationsController < Admin::BaseController
  def index
    @registrations = Registration.ordered.search(params[:search]).page(params[:page]).per(20)
  end
end
