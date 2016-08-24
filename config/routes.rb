Rails.application.routes.draw do

  namespace :admin do
    get 'sessions/new'
    root 'home#index'
    get    '/login',  to: "sessions#new"
    post   '/login',  to: "sessions#create"
    delete '/logout', to: "sessions#destroy"

    resources :industries
    resources :categories
    resources :products
    resources :options
    resources :product_attachments
    resources :pdf_categories
  end

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
