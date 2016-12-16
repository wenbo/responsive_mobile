set :branch, 'production'
set :deploy_to, '/var/www/hioki/staging/'
set :bundle_flags, "--no-binstubs"
set :log_level, :debug

role :app, %w{103.197.26.6}
role :web, %w{103.197.26.6}
role :db,  %w{103.197.26.6}
set :linked_dirs, %w{log tmp/pids tmp/cache tmp/sockets bundle  public/assets public/uploads public/projects public/ckeditor_assets public/system public/userscenter/intellectual/documents}
set :linked_files, %w{  puma.rb config/database.yml hioki.god }

server '103.197.26.6',port: 22, user: 'root', roles: %w{web app db}
