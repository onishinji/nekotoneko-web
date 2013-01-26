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