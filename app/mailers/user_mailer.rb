class UserMailer < ApplicationMailer
  def contact_email(contact)
    @contact = contact
    mail(from: contact.email, to: "info@hioki.com.cn", subject: 'Contact HIOKI')
  end

  def counterfeit_email(contact)
    @contact = contact
    mail(from: contact.email, to: "yiyun6674@126.com", subject: 'Register Parallel')
  end
end
