rails g model User username:string password_hash:string

rails g model Industry name:string note:string parent_id:integer
add_index :industries, :parent_id
rails g model Category name:string note:string parent_id:integer
add_index :categories, :parent_id


rails g model Product name:string banner:string feature:string desc_as_option:string red_desc_as_option:string summary:text upgraded:text is_new:boolean is_recommended:boolean
add_index :products, :name

rails g controller admin/base
rails g controller admin/sessions new
rails generate simple_captcha
rails g controller admin/home index

rails g controller admin/industries index
rails g controller admin/categories index
rails g controller admin/products index new crete edit update destroy show

rails g model Option name:string picture:string
rails g controller admin/options index new create edit upload destroy show
rails g controller admin/product_attachments index new create edit update destroy show

  rails g migration AddAvatarToOptions avatar:string
