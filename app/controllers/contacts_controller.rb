# coding: utf-8
class ContactsController < ApplicationController
  skip_before_filter :verify_authenticity_token
  
  def create
    @root_categories = Category.roots
    @contact = Contact.new(params_contact)
    if @contact.save
      flash[:notice] = "我们会尽快给您回复，请耐心等待"
      UserMailer.contact_email(@contact).deliver_now
      redirect_to "/contact"
    end
  end
  
  private
  def params_contact
    params.require(:contact).permit(:username, :company_name,  :department, :address, :postcode, :tel, :fax, :email, :content)
  end
  
end
