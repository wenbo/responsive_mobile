# coding: utf-8
class SessionsController < ApplicationController
  
  def login_async
    user = HUser.find_by(email: params[:email])
    if user.valid_password?(params[:password])
      session[:user_id] = HUser.id
        render json: {code: 200}
    else
      render json: {code: 404, mmessage: "error"}
    end
  end

  def new
  end

  def create
  end

  def destroy
  end
  
end
