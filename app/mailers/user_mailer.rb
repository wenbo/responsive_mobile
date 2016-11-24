class UserMailer < ApplicationMailer
  def contact_email(contact)
    @contact = contact
    mail(to: "yiyun6674@126.com", subject: 'Welcome to My Awesome Site')
  end
end
