class PdfCategory < ApplicationRecord
  validates :name, uniqueness: true
  acts_as_tree order: "name"
end
