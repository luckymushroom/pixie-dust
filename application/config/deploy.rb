set :domain,    "mfarm.co.ke"
set :user,      "mfarm.co.ke"
set :password,  "7months0ld"

# Your git repository
set :repository, "git@mfarm.co.ke:mfarm.git"

server "#{domain}", :app, :web, :db, :primary => true

set :deploy_via, :copy
set :copy_exclude, [".git", ".DS_Store"]
set :scm, :git
set :branch, "master"
# set this path to be correct on your server
set :deploy_to, "/domains/linda.mfarm.co.ke/html/"
set :use_sudo, false
set :keep_releases, 5
set :git_shallow_clone, 1

ssh_options[:paranoid] = false

# this tells capistrano what to do when you deploy
namespace :deploy do

  desc <<-DESC
  A macro-task that updates the code and fixes the symlink.
  DESC
  task :default do
    transaction do
      update_code
      make_writeable
      symlink
      symlink_config
    end
  end

  task :update_code, :except => { :no_release => true } do
    on_rollback { run "rm -rf #{release_path}; true" }
    strategy.deploy!
  end

  # Link up your specific database config file under your shared path
  task :symlink_config, :except => { :no_release => true } do
    run "ln -nsf #{shared_path}/application/config/database.php #{current_release}/application/config"
  end

  task :after_deploy do
    cleanup
  end

  # If using caching and if you want to see the logs - make those dirs writeable!
  task :make_writeable, :except => { :no_release => true } do
    run "chmod -R 777 #{current_release}/application/cache"
    run "chmod -R 777 #{current_release}/application/logs"
  end

end