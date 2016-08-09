require 'test_helper'

class Admin::IndustriesControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get admin_industries_index_url
    assert_response :success
  end

end
