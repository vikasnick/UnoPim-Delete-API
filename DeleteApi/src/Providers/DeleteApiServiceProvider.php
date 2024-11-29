<?php

namespace Webkul\DeleteApi\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class DeleteApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Register configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php',
            'deleteapi'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        // Publish config
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('deleteapi.php'),
        ], 'config');
    }
}
