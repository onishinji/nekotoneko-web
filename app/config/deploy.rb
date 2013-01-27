set :application, "NekoToNeko"
set :domain,      "nekotoneko.com"
set :deploy_to,   "/home/apache/domains/nekotoneko.com/subdomains/www"
set :app_path,    "app"

set :repository,  "https://github.com/onishinji/nekotoneko-web.git"
set :scm,         :git
set :deploy_via, :remote_cache
set :model_manager, "doctrine"

set :user,        "root"
set :use_sudo,    false
ssh_options[:port] = 22
set :php_bin, "/usr/local/zend/bin/php"

set :branch,      "master"


role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Symfony2 migrations will run

set  :keep_releases,  3

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/cache", app_path + "/logs", web_path + "/uploads", "vendor"]

set :use_composer, true
set :update_vendors, true

# Be more verbose by uncommenting the following line
#logger.level = Logger::MAX_LEVEL


before 'deploy:update_code', 'deploy:mine'
after 'deploy:update_code', 'deploy:mine'
 
# This is a custom task to set the ACL on the app/logs and app/cache directories
namespace :deploy do
 
  task :mine, :roles => :app do
    shared_dirs = [
      app_path + "/logs",
      app_path + "/cache"
    ]
    
    # add group write permissions
    #run "chmod -R g+w #{shared_dirs.join(' ')}"
    # Allow directories to be writable by webserver and this user
    run "cd #{latest_release} && sudo chown -R www-data:www-data app/cache"
    run "cd #{latest_release} && sudo chown -R www-data:www-data app/logs"
    run "cd #{latest_release} && sudo chmod -R 777 app/cache"
  end
end
