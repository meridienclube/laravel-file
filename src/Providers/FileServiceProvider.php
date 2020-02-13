<?php

namespace ConfrariaWeb\File\Providers;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //$this->loadViewsFrom(__DIR__ . '/../Views', 'file');
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->publishes([__DIR__ . '/../../config/cw_file.php' => config_path('cw_file.php')], 'cw_file');
    }

    public function register()
    {

    }

}