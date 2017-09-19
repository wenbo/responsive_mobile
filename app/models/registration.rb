class Registration < ApplicationRecord
  belongs_to :seihin
  belongs_to :h_user
  scope :ordered, -> {order('created_at DESC')} #{order(is_recommended: :desc, is_new: :desc)}
  scope :product_model_name, -> (search) { joins(:seihins).where('seihins.product_model_name LIKE :search', {search: "%#{search}%"}) }
  scope :product_name, -> (search) { joins(:seihins).where('seihins.product_name LIKE :search', {search: "%#{search}%"}) }
  scope :h_user_name, -> (search) { joins(:h_user).where('h_user.name LIKE :search', {search: "%#{search}%"}) }

  def self.search(search)      
    re = self
    #re = re.product_model_name(search[:product_model_name]) if search[:product_model_name].present?
    #re = re.product_name(search[:product_name]) if search[:product_name].present?
    #re = re.where("product_number LIKE :search", {search: "%#{search[:product_number]}%"}) if search[:product_number].present?
    #re = re.h_user_name(search[:h_user_name]) if search[:h_user_name].present?
  end

end
