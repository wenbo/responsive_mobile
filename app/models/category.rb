class Category < ApplicationRecord
  validates :name, uniqueness: true
  #acts_as_tree order: "name"
  acts_as_nested_set
end
