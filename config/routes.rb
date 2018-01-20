Rails.application.routes.draw do
  
  get "sessions/logout" => "sessions#destroy"
  post "sessions/login_async" => "sessions#login_async"
  get "sessions/logout_async" => "sessions#logout_async"
  get "industries/:id/products/" => "industries#products"
  get "/products/registration/" => "registrations#new"
  post "/products/registration/search_ajax" => "registrations#search_ajax"
  # delete "logout_async" => "sessions#logout_async"
  resources :sessions

  resources :news_categories, only: [:show]
  resources :categories, only: [:show]
  resources :news, only: [:show]
  resources :industries, only: [:show]
  resources :contacts, only: [:create]
  resources :counterfeits, only: [:create]
  resources :registrations, only: [:create, :destroy]

  get 'products' => 'products#index'
  get 'products/:id' => 'products#show'
  get 'product' => 'products#product'
  get 'recorder' => 'products#show'
  get 'news' => 'news#index'


  get '/' => 'home#index'
  get '/index.html' => 'home#index'
  get 'repair' => 'home#repair'
  get 'recruit' => 'home#recruit'
  get 'company' => 'home#company'
  get 'contact' => 'home#contact'
  get 'distribution' => 'home#distribution'
  get 'speech' => 'home#speech'
  get 'history' => 'home#history'
  get 'counterfeit' => 'home#counterfeit'


  mount Ckeditor::Engine => '/ckeditor'
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
    resources :utilities
    resources :registrations do
      get 'export', on: :collection
    end
    resources :news_categories
    resources :news
    resources :faq_categories
    resources :faqs
  end

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
