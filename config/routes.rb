Rails.application.routes.draw do
  namespace :admin do
    get 'products/index'
  end

  namespace :admin do
    get 'products/new'
  end

  namespace :admin do
    get 'products/crete'
  end

  namespace :admin do
    get 'products/edit'
  end

  namespace :admin do
    get 'products/update'
  end

  namespace :admin do
    get 'products/destroy'
  end

  namespace :admin do
    get 'products/show'
  end

  namespace :admin do
    get 'categories/index'
  end

  namespace :admin do
    get 'industries/index'
  end

  namespace :admin do
    get 'home/index'
  end

  namespace :admin do
    get 'sessions/new'
    root 'home#index'
    get    '/login',  to: "sessions#new"
    post   '/login',  to: "sessions#create"
    delete '/logout', to: "sessions#destroy"

    resources :industries
    resources :categories
    resources :products
    
  end

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
