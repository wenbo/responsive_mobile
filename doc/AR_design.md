rails g model User username:string password_hash:string

rails g model Industry name:string note:string parent_id:integer
add_index :industries, :parent_id
rails g model Category name:string note:string parent_id:integer
add_index :categories, :parent_id

rails g model PDFCategory name:string note:string parent_id:integer
add_index :pdf_categories, :parent_id

rails g model ProductAttachment name:string note:string pdf_category:references
rails generate paperclip product_attachment pdf


rails g model Product name:string banner:string feature:string desc_as_option:string red_desc_as_option:string summary:text upgraded:text is_new:boolean is_recommended:boolean
add_index :products, :name

rails g model OptionCategory name:string note:string option_sku_collection:string product:references

rails g controller admin/base
rails g controller admin/sessions new
rails generate simple_captcha
rails g controller admin/home index
rails g controller registrations new 

rails g controller admin/industries index
rails g controller admin/categories index
rails g controller admin/products index new crete edit update destroy show

rails g model Option name:string picture:string
rails g controller admin/options index new create edit upload destroy show
rails g controller admin/product_attachments index new create edit update destroy show

rails g migration AddAvatarToOptions avatar:string

rails g migration AddThumbImageAndIsDeletedToProducts thumb_image:string is_deleted:boolean

rails g model Utility title:string description:string link:string
rails g migration create_table_products_utilities product:references utility:references
rails g migration create_products_industries product:references utility:references
rails g migration add_category_id_to_products category:references

rails g model NewsCategory name:string
rails generate paperclip NewsCategory image
rails g model News name:string news_category:references content:text is_public:boolean public_time:datetime
rails generate paperclip Category image

rails g migration add_note_for_option_to_products note_for_option:string
rails g migration rename_desc_as_option_from_products desc_as_option:string

rails g migration add_video_path_to_products video_path:string

rails g model UpgradeAttachment name:string product:references classifier_id:integer # [[1, "下载文件"], [2, "操作说明书"]]
rails generate paperclip upgrade_attachment attachment

rails g migration create_products_product_attachments product:references product_attachment:references

rails g migration create_categories_industries category:references industry:references

rails g model ProductAccessRecord product:references category:references count:integer

rails g migration add_visited_count_to_products visited_count:integer

rails g migration add_sku_and_desc_to_upgrade_attachments sku:string  desc:string
rails g migration add_search_keywords_to_products search_keywords:string
rails g migration add_position_to_categories position:integer

rails g migration add_position_to_products position:integer
rails g model Contact username:string company_name:string  department:string  address:string postcode:string  tel:string  fax:string  email:string content:text
rails g model counterfeit sku:string  serial_number:string username:string unit_name:string address:string tel:string email:string content:text
rails g migration add_upgraded_note_to_products upgraded_note:text
rails g migration add_spec_table_to_products spec_table:text

rails g model Seihin product_name:string product_number:string product_model_name:string note:string
rails g model registration h_user_id:integer seihin_id:integer

rake db:migrate:redo VERSION=20170908142743
rake db:migrate:redo VERSION=20170908142722

rake db:migrate:down VERSION=20180120153503
rake db:migrate:down VERSION=20180120153444

rake db:migrate:up VERSION=20180120153444
rake db:migrate:up VERSION=20180120153503

bundle exec rake db:migrate:down VERSION=20171022141940

rake import:seihin
Seihin.count
HUser.first.registrations
Registration.includes(:seihin).where("seihins.product_model_name LIKE :search", {search: "%000%"})
Registration.joins(:seihin).where("'seihins.product_model_name' LIKE :search", {search: "%000%"})
Registration.product_name("000")
Registration.product_model_name("000")

rails g migration AddCategoryIdsToProducts category_ids:string
rails g model ProdCategory 
https://stackoverflow.com/questions/4864513/ruby-on-rails-multiple-selection-in-f-select

rails g model FaqCategory name:string position:integer parent_id:integer category:references avatar:attachment
rails g model Faq title:string  body:text faq_category:references public_time:datetime



## code
Product.first.category_ids
Product.first.categories
Product.where(id: [1, 2])

errors = []
Product.all.each do |pro|
begin 
pro.category_ids_arr = [pro.category.id]
pro.save
rescue => e
errors << [pro.id, e.message]
puts pro.id
end
end

nil_p = Product.where("category_id is ?", nil)
ProdCategory.count
ActiveRecord::Base.connection.execute("truncate table prod_categories")
errors = []
Product.all.each do |pro|
begin 
if pro.category.present?
pro_c = ProdCategory.create(
    product: pro, 
    category: pro.category
    )
pro_c.save
  end
rescue => e
errors << [pro.id, e.message]
end
end
