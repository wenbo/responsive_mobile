# coding: utf-8
class ContactsController < ApplicationController
  skip_before_filter :verify_authenticity_token
  
  def create
    @root_categories = Category.roots
    @contact = Contact.new(params_contact)
    if @contact.save
      UserMailer.contact_email(@contact).deliver_now
    end
  end
  
  private
  def params_contact
    params.require(:contact).permit(:username, :company_name,  :department, :address, :postcode, :tel, :fax, :email, :content)
  end
  
end
