class Industry < ApplicationRecord
  #validates :name, uniqueness: true
  acts_as_tree order: "name"
  has_and_belongs_to_many :categories
  scope :ordered, -> {order('id asc')}
end
