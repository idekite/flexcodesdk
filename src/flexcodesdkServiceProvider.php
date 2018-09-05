<?php

namespace idekite\flexcodesdk;

use Illuminate\Support\ServiceProvider;

class flexcodesdkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'idekite');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'idekite');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/flexcodesdk.php' => config_path('flexcodesdk.php'),
            ], 'flexcodesdk.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/idekite'),
            ], 'flexcodesdk.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/idekite'),
            ], 'flexcodesdk.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/idekite'),
            ], 'flexcodesdk.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/flexcodesdk.php', 'flexcodesdk');

        // Register the service the package provides.
        $this->app->singleton('flexcodesdk', function ($app) {
            return new flexcodesdk;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['flexcodesdk'];
    }
}