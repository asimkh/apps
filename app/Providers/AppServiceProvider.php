<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Request HTTPS for all route
        //$this->app['request']->server->set('HTTPS', true);

        //SSL only on production
        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        //
        if ($this->app->environment() == 'local') {
        $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }

    }
}
