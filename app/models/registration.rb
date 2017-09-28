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

  def self.to_csv
    CSV.generate do |csv|
      csv << csv_column_names
      all.each do |registration|
        csv << registration.csv_column_values
      end
    end
  end

  def self.csv_column_names
    ["型号", "产品名称", "生产编号", "使用者名", "Email", "购入年月日"]
  end

  def csv_column_values
    [self.seihin.product_model_name, self.seihin.product_name, self.product_number, self.h_user.try(:name), self.h_user.try(:email), purchase_on]
  end
end
