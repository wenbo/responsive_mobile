require 'test_helper'

class Admin::ProductAttachmentsControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get admin_product_attachments_index_url
    assert_response :success
  end

  test "should get new" do
    get admin_product_attachments_new_url
    assert_response :success
  end

  test "should get create" do
    get admin_product_attachments_create_url
    assert_response :success
  end

  test "should get edit" do
    get admin_product_attachments_edit_url
    assert_response :success
  end

  test "should get update" do
    get admin_product_attachments_update_url
    assert_response :success
  end

  test "should get destroy" do
    get admin_product_attachments_destroy_url
    assert_response :success
  end

  test "should get show" do
    get admin_product_attachments_show_url
    assert_response :success
  end

end
