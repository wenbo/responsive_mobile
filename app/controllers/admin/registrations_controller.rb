class Admin::RegistrationsController < Admin::BaseController
  def index
    @registrations = Registration.search(params[:search]).ordered.page(params[:page]).per(20)
  end
 
  # http://ruby-rails.hatenadiary.com/entry/20141119/1416398472
  def export
   require 'csv' 
   send_data Registration.to_csv, filename: "data_on_#{Time.now.strftime('%Y%m%d%H%M')}.csv", type: 'text/csv; charset=utf-8'
  end
end
