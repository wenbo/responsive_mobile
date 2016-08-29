# coding: utf-8
module ApplicationHelper
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
end
