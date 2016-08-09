module ApplicationHelper
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
