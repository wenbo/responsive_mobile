require 'spreadsheet'
require 'stringio'

class Admin::RegistrationsController < Admin::BaseController
  def index
    @registrations = Registration.search(params[:search]).ordered.page(params[:page]).per(20)
  end
 
  # http://ruby-rails.hatenadiary.com/entry/20141119/1416398472
  # http://d.hatena.ne.jp/gakeno_ueno_horyo/20130721/1374385941
  def export
   #send_data Registration.to_csv, filename: "data_on_#{Time.now.strftime('%Y%m%d%H%M')}.csv", type: 'text/csv; charset=utf-8'
   Spreadsheet.client_encoding = 'UTF-8'
   book = Spreadsheet.open "#{Rails.root.to_s}/doc/xls_template.xls"
   sheet = book.worksheet 0
   Registration.all.each_with_index do |reg, l|
     line = l + 1
     data = [reg.seihin.product_model_name, reg.seihin.product_name, reg.product_number, reg.h_user.try(:name), reg.h_user.try(:email), reg.purchase_on]
     sheet.row(line).replace(data)
   end

   file_name = "data_on_#{Time.now.strftime('%Y%m%d%H%M')}.xls"
   data = StringIO.new ''
   book.write data
   send_data(
     data.string,
     :disposition => 'attachment',
     :type => 'application/excel',
     :filename => file_name
   )
  end
end
