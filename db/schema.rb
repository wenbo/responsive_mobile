# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20180120153503) do

  create_table "categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.integer  "parent_id"
    t.integer  "lft"
    t.integer  "rgt"
    t.datetime "created_at",                       null: false
    t.datetime "updated_at",                       null: false
    t.string   "image_file_name"
    t.string   "image_content_type"
    t.integer  "image_file_size"
    t.datetime "image_updated_at"
    t.integer  "position"
    t.text     "intro_links",        limit: 65535
    t.index ["lft"], name: "index_categories_on_lft", using: :btree
    t.index ["rgt"], name: "index_categories_on_rgt", using: :btree
  end

  create_table "categories_industries", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer "category_id"
    t.integer "industry_id"
    t.index ["category_id"], name: "index_categories_industries_on_category_id", using: :btree
    t.index ["industry_id"], name: "index_categories_industries_on_industry_id", using: :btree
  end

  create_table "ckeditor_assets", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "data_file_name",               null: false
    t.string   "data_content_type"
    t.integer  "data_file_size"
    t.string   "data_fingerprint"
    t.integer  "assetable_id"
    t.string   "assetable_type",    limit: 30
    t.string   "type",              limit: 30
    t.integer  "width"
    t.integer  "height"
    t.datetime "created_at",                   null: false
    t.datetime "updated_at",                   null: false
    t.index ["assetable_type", "assetable_id"], name: "idx_ckeditor_assetable", using: :btree
    t.index ["assetable_type", "type", "assetable_id"], name: "idx_ckeditor_assetable_type", using: :btree
  end

  create_table "contacts", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "username"
    t.string   "company_name"
    t.string   "department"
    t.string   "address"
    t.string   "postcode"
    t.string   "tel"
    t.string   "fax"
    t.string   "email"
    t.text     "content",      limit: 65535
    t.datetime "created_at",                 null: false
    t.datetime "updated_at",                 null: false
  end

  create_table "counterfeits", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "sku"
    t.string   "serial_number"
    t.string   "username"
    t.string   "unit_name"
    t.string   "address"
    t.string   "tel"
    t.string   "email"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
  end

  create_table "faq_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.integer  "position"
    t.integer  "lft"
    t.integer  "rgt"
    t.integer  "parent_id"
    t.integer  "category_id"
    t.string   "avatar_file_name"
    t.string   "avatar_content_type"
    t.integer  "avatar_file_size"
    t.datetime "avatar_updated_at"
    t.datetime "created_at",          null: false
    t.datetime "updated_at",          null: false
    t.index ["category_id"], name: "index_faq_categories_on_category_id", using: :btree
  end

  create_table "faqs", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.text     "body",            limit: 65535
    t.integer  "faq_category_id"
    t.date     "public_time"
    t.datetime "created_at",                    null: false
    t.datetime "updated_at",                    null: false
    t.index ["faq_category_id"], name: "index_faqs_on_faq_category_id", using: :btree
  end

  create_table "industries", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.integer  "number"
    t.string   "note"
    t.integer  "parent_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["parent_id"], name: "index_industries_on_parent_id", using: :btree
  end

  create_table "industries_products", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer "product_id"
    t.integer "industry_id"
    t.index ["industry_id"], name: "index_industries_products_on_industry_id", using: :btree
    t.index ["product_id"], name: "index_industries_products_on_product_id", using: :btree
  end

  create_table "news", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.integer  "news_category_id"
    t.text     "content",          limit: 65535
    t.boolean  "is_public"
    t.date     "public_time"
    t.datetime "created_at",                     null: false
    t.datetime "updated_at",                     null: false
    t.index ["news_category_id"], name: "index_news_on_news_category_id", using: :btree
  end

  create_table "news_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.datetime "created_at",         null: false
    t.datetime "updated_at",         null: false
    t.string   "image_file_name"
    t.string   "image_content_type"
    t.integer  "image_file_size"
    t.datetime "image_updated_at"
  end

  create_table "option_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.string   "option_sku_collection"
    t.integer  "product_id"
    t.datetime "created_at",                            null: false
    t.datetime "updated_at",                            null: false
    t.integer  "position",              default: 99999
    t.index ["product_id"], name: "index_option_categories_on_product_id", using: :btree
  end

  create_table "options", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "sku"
    t.string   "title"
    t.text     "description", limit: 65535
    t.datetime "created_at",                null: false
    t.datetime "updated_at",                null: false
    t.string   "avatar"
    t.index ["sku"], name: "index_options_on_sku", using: :btree
  end

  create_table "pdf_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.integer  "parent_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["parent_id"], name: "index_pdf_categories_on_parent_id", using: :btree
  end

  create_table "prod_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer  "product_id"
    t.integer  "category_id"
    t.datetime "created_at",  null: false
    t.datetime "updated_at",  null: false
    t.index ["category_id"], name: "index_prod_categories_on_category_id", using: :btree
    t.index ["product_id"], name: "index_prod_categories_on_product_id", using: :btree
  end

  create_table "product_access_records", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer  "product_id"
    t.integer  "category_id"
    t.integer  "visited_count"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
    t.index ["category_id"], name: "index_product_access_records_on_category_id", using: :btree
    t.index ["product_id"], name: "index_product_access_records_on_product_id", using: :btree
  end

  create_table "product_attachments", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.integer  "pdf_category_id"
    t.datetime "created_at",       null: false
    t.datetime "updated_at",       null: false
    t.string   "pdf_file_name"
    t.string   "pdf_content_type"
    t.integer  "pdf_file_size"
    t.datetime "pdf_updated_at"
    t.index ["pdf_category_id"], name: "index_product_attachments_on_pdf_category_id", using: :btree
  end

  create_table "product_attachments_products", id: false, force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer "product_id"
    t.integer "product_attachment_id"
    t.index ["product_attachment_id"], name: "index_product_attachments_products_on_product_attachment_id", using: :btree
    t.index ["product_id"], name: "index_product_attachments_products_on_product_id", using: :btree
  end

  create_table "products", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "sku"
    t.string   "title"
    t.string   "banner"
    t.string   "feature"
    t.string   "desc"
    t.string   "red_desc_as_option"
    t.string   "option_avatar"
    t.text     "summary",            limit: 65535
    t.text     "upgraded",           limit: 65535
    t.boolean  "is_new"
    t.boolean  "is_main_body"
    t.boolean  "is_option"
    t.boolean  "is_display"
    t.boolean  "is_recommended"
    t.datetime "created_at",                                       null: false
    t.datetime "updated_at",                                       null: false
    t.string   "thumb_image"
    t.boolean  "is_deleted"
    t.integer  "category_id"
    t.string   "note_for_option"
    t.string   "video_path"
    t.integer  "visited_count"
    t.string   "search_keywords"
    t.integer  "position",                         default: 99999
    t.text     "upgraded_note",      limit: 65535
    t.text     "spec_table",         limit: 65535
    t.string   "category_ids"
    t.index ["category_id"], name: "index_products_on_category_id", using: :btree
    t.index ["sku"], name: "index_products_on_sku", using: :btree
  end

  create_table "products_utilities", id: false, force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer "product_id"
    t.integer "utility_id"
    t.index ["product_id"], name: "index_products_utilities_on_product_id", using: :btree
    t.index ["utility_id"], name: "index_products_utilities_on_utility_id", using: :btree
  end

  create_table "registrations", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.integer  "h_user_id"
    t.string   "h_user_email"
    t.string   "h_user_name"
    t.integer  "seihin_id"
    t.string   "product_number"
    t.date     "purchase_on"
    t.datetime "created_at",     null: false
    t.datetime "updated_at",     null: false
  end

  create_table "seihins", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "product_name"
    t.string   "product_model_name"
    t.string   "note"
    t.datetime "created_at",         null: false
    t.datetime "updated_at",         null: false
  end

  create_table "simple_captcha_data", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "key",        limit: 40
    t.string   "value",      limit: 6
    t.datetime "created_at"
    t.datetime "updated_at"
    t.index ["key"], name: "idx_key", using: :btree
  end

  create_table "upgrade_attachments", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.integer  "product_id"
    t.integer  "classifier_id"
    t.datetime "created_at",              null: false
    t.datetime "updated_at",              null: false
    t.string   "attachment_file_name"
    t.string   "attachment_content_type"
    t.integer  "attachment_file_size"
    t.datetime "attachment_updated_at"
    t.string   "sku"
    t.string   "desc"
    t.index ["product_id"], name: "index_upgrade_attachments_on_product_id", using: :btree
  end

  create_table "users", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "username"
    t.string   "password_hash"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
  end

  create_table "utilities", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "title"
    t.string   "description"
    t.string   "link"
    t.datetime "created_at",  null: false
    t.datetime "updated_at",  null: false
  end

  add_foreign_key "faq_categories", "categories"
  add_foreign_key "faqs", "faq_categories"
  add_foreign_key "news", "news_categories"
  add_foreign_key "option_categories", "products"
  add_foreign_key "product_access_records", "categories"
  add_foreign_key "product_access_records", "products"
  add_foreign_key "product_attachments", "pdf_categories"
  add_foreign_key "products", "categories"
  add_foreign_key "upgrade_attachments", "products"
end
