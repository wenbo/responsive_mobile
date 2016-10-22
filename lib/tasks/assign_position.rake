desc "@root_categories = Category.roots"
task "assign:category_position" => :environment do
  Category.roots.each_with_index do |category, i|
    puts i+1
    category.update_attribute(:position, i+1)
  end
end
