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

ActiveRecord::Schema.define(version: 20160827062547) do

  create_table "categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.integer  "parent_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["parent_id"], name: "index_categories_on_parent_id", using: :btree
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

  create_table "option_categories", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "name"
    t.string   "note"
    t.string   "option_sku_collection"
    t.integer  "product_id"
    t.datetime "created_at",            null: false
    t.datetime "updated_at",            null: false
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

  create_table "products", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "sku"
    t.string   "title"
    t.string   "banner"
    t.string   "feature"
    t.string   "desc_as_option"
    t.string   "red_desc_as_option"
    t.string   "option_avatar"
    t.text     "summary",            limit: 65535
    t.text     "upgraded",           limit: 65535
    t.boolean  "is_new"
    t.boolean  "is_main_body"
    t.boolean  "is_option"
    t.boolean  "is_display"
    t.boolean  "is_recommended"
    t.datetime "created_at",                       null: false
    t.datetime "updated_at",                       null: false
    t.index ["sku"], name: "index_products_on_sku", using: :btree
  end

  create_table "simple_captcha_data", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "key",        limit: 40
    t.string   "value",      limit: 6
    t.datetime "created_at"
    t.datetime "updated_at"
    t.index ["key"], name: "idx_key", using: :btree
  end

  create_table "users", force: :cascade, options: "ENGINE=InnoDB DEFAULT CHARSET=utf8" do |t|
    t.string   "username"
    t.string   "password_hash"
    t.datetime "created_at",    null: false
    t.datetime "updated_at",    null: false
  end

  add_foreign_key "option_categories", "products"
  add_foreign_key "product_attachments", "pdf_categories"
end
