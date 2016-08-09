require 'test_helper'

class Admin::OptionsControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get admin_options_index_url
    assert_response :success
  end

  test "should get new" do
    get admin_options_new_url
    assert_response :success
  end

  test "should get create" do
    get admin_options_create_url
    assert_response :success
  end

  test "should get edit" do
    get admin_options_edit_url
    assert_response :success
  end

  test "should get upload" do
    get admin_options_upload_url
    assert_response :success
  end

  test "should get destroy" do
    get admin_options_destroy_url
    assert_response :success
  end

  test "should get show" do
    get admin_options_show_url
    assert_response :success
  end

end
