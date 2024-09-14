<?php

namespace App\Providers;

use App\Services\ChargerService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton("charger", function ($app) {
            return new ChargerService();
        });
    }
}
