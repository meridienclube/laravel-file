<?php

namespace ConfrariaWeb\File\Providers;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadViewsFrom(__DIR__ . '/../Views', 'file');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

}
