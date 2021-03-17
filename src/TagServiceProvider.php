<?php

namespace Lwxtd\Tag;

use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

		$this->publishes([
			realpath(__DIR__.'/migrations') => database_path('migrations')
		], 'migrations');




    }
    public function register()
    {
           $this->app->bind('lwxtd-tag', function() {
            return new Tag;
        });

    }
}


?>
