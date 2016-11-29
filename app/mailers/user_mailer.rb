class UserMailer < ApplicationMailer
  def contact_email(contact)
    @contact = contact
    mail(from: contact.email, to: "info@hioki.com.cn", subject: 'Contact HIOKI')
  end

  def counterfeit_email(contact)
    @contact = contact
    mail(from: contact.email, to: "chenlu@hioki.com.cn", subject: 'Register Parallel')
  end
end
