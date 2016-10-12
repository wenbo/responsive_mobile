set :branch, 'master'
set :deploy_to, '/home/admin/www/hioki_rails/production'
set :bundle_flags, "--no-binstubs"
set :log_level, :debug

role :app, %w{222.73.5.207}
role :web, %w{222.73.5.207}
role :db,  %w{222.73.5.207}
set :linked_dirs, %w{log tmp/pids tmp/cache tmp/sockets bundle  public/assets public/uploads public/projects public/ckeditor_assets public/system}
set :linked_files, %w{  puma.rb config/database.yml  }

server '222.73.5.207',port: 22, user: 'admin', roles: %w{web app db}
