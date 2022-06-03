<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('settings', function ($app) {
            return $app['cache']->remember('site.settings', 60, function () {
                return Setting::pluck('value', 'key')->toArray();
            });
        });
    }
}
