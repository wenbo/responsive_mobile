rails g model User username:string password_hash:string

rails g model Industry name:string note:string parent_id:integer
add_index :industries, :parent_id
rails g model Category name:string note:string parent_id:integer
add_index :categories, :parent_id

rails g model Product name:string banner:string feature:string desc_as_option:string red_desc_as_option:string summary:textarea upgraded:textarea is_new:boolean is_recommended:boolean

