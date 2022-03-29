<?php

namespace Treii28\GedcomxLaravel;

use Illuminate\Support\ServiceProvider;

class GedcomxLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'treii28');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'treii28');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gedcomx-laravel.php', 'gedcomx-laravel');

        // Register the service the package provides.
        $this->app->singleton('gedcomx-laravel', function ($app) {
            return new GedcomxLaravel;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gedcomx-laravel'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/gedcomx-laravel.php' => config_path('gedcomx-laravel.php'),
        ], 'gedcomx-laravel.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/treii28'),
        ], 'gedcomx-laravel.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/treii28'),
        ], 'gedcomx-laravel.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/treii28'),
        ], 'gedcomx-laravel.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
