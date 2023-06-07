<?php

namespace App\Providers;

use App\Services\GigPlatformService;
use App\Services\InventoryPlatformService;
use App\Services\PlatformService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PlatformService::class, function ($app){
            return match (request()->input('service')) {
                'inventory' => new InventoryPlatformService(env('INVENTORY_URL')),
                default => new GigPlatformService(env('GIG_URL')),
            };
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
