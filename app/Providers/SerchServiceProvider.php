<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SerchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'serch',
            'App\Http\Compornents\Serch'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
