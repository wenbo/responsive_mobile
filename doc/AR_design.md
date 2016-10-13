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
