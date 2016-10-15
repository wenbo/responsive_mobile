lock '3.6.0'

set :application, 'hioki_rails'
set :repo_url, 'git@gitlab.com:hioki/hiroki_rails.git'

set :keep_releases, 5

set :rbenv_ruby, '2.3.0'
set :rbenv_prefix, "RBENV_ROOT=#{fetch(:rbenv_path)} RBENV_VERSION=#{fetch(:rbenv_ruby)} #{fetch(:rbenv_path)}/bin/rbenv exec"
set :rbenv_map_bins, %w{rake gem bundle ruby rails}
set :rbenv_roles, :all 

