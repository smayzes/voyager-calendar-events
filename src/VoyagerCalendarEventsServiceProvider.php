<?php

namespace Codelabs\VoyagerCalendarEvents;

use Codelabs\VoyagerCalendarEvents\VoyagerCalendarEvents;
use Illuminate\Support\ServiceProvider;

class VoyagerCalendarEventsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'voyagercalendarevents');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/config/voyagercalendarevents.php' => config_path('voyagercalendarevents.php'),
            ], 'voyagercalendarevents.config');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/voyagercalendarevents.php', 'voyagercalendarevents');

        // Register the service the package provides.
        $this->app->singleton('voyagercalendarevents', function ($app) {
            return new VoyagerCalendarEvents;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['voyagercalendarevents'];
    }
}
