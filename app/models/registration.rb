class Registration < ApplicationRecord
  belongs_to :seihin
  belongs_to :h_user
  scope :ordered, -> {order('created_at DESC')} #{order(is_recommended: :desc, is_new: :desc)}
  scope :product_model_name, -> (search) { joins(:seihin).where('seihins.product_model_name LIKE :search', {search: "%#{search}%"}) }
  scope :product_name, -> (search) { joins(:seihin).where('seihins.product_name LIKE :search', {search: "%#{search}%"}) }

  def self.search(search)      
    re = self
    if search.present?
      re = re.product_model_name(search[:product_model_name]) if search[:product_model_name].present?
      re = re.product_name(search[:product_name]) if search[:product_name].present?
      re = re.where("product_number LIKE :search", {search: "%#{search[:product_number]}%"}) if search[:product_number].present?
      re = re.where("h_user_name LIKE :search", {search: "%#{search[:h_user_name]}%"}) if search[:h_user_name].present?
      re = re.where("h_user_email LIKE :search", {search: "%#{search[:h_user_email]}%"}) if search[:h_user_email].present?
    end
    re
  end

end
