class Admin::RegistrationsController < Admin::BaseController
  def index
    @registrations = Registration.search(params[:search]).ordered.page(params[:page]).per(20)
  end
end
