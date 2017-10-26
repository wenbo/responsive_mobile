# coding: utf-8
module ApplicationHelper

  def sortable(column, title = nil)
    title ||= column.titleize  
    css_class = column == sort_column ? "current #{sort_direction}" : nil
    direction = column == sort_column && sort_direction == "asc" ? "desc" : "asc"
    link_to title, {:search => params[:search]}.merge(:sort => column, :direction => direction, :page => params[:page]), {:class => css_class}
  end

  
  def parse_date(date,join = '-') 
    date.strftime("%Y#{join}%m#{join}%d") if date
  end

  def parse_date_with_unit(date) 
    date.strftime("%Y年%m月%d日") if date
  end

  
  def link_to_add_fields(name, f, association)
    new_object = f.object.class.reflect_on_association(association).klass.new
    fields = f.fields_for(association, new_object, :child_index => "new_#{association}") do |builder|
      render(association.to_s.singularize + "_fields", :f => builder)
    end
    link_to_function(name, "add_fields(this, '#{association}', '#{escape_javascript(fields)}')")
  end

  def link_to_function(name, function, html_options={})
  content_tag(:a, name, {:href => 'javascirpt:void(0)', :onclick => "#{function}; return false;"}.merge(html_options))
end
  
  def link_to_remove_fields(name, f)
    f.hidden_field(:_destroy) + link_to_function(name, "remove_fields(this)")
  end

   def delete_image(form_builder)  
    if form_builder.object.new_record? 
      link_to_function("删除", "$(this).parent().parent('fieldset').remove()") 
    else
      form_builder.hidden_field(:_destroy) +
          link_to_function("删除", "$(this).parent().parent('fieldset').hide(); $(this).prev().val(1)")
    end
  end
  
  def active?(*args)
    args.each do |arg|
      if arg.class == Hash 
        arg.each do |key, val|
          return 'active' if key.to_s == c_name && a_name.in?([val].flatten.map(&:to_s))
        end
      end
      return 'active' if arg.to_s.in?([c_name])
    end
    return 
  end
  def product_category_links(name_id_hash)
    arr = []
    name_id_hash.each do |name, id|
      arr << link_to(name, "/categories/#{id}")
    end
    arr.join(" , ")
  end
end
