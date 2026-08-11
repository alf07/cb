<?php

namespace alf89\cb;

use alf89\cb\Services\CurrencyService;
use alf89\cb\Services\CurrencyApiClient;
use Illuminate\Support\ServiceProvider;

class CbServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/cb.php',
            'cb'
        );

        $this->app->singleton(CurrencyApiClient::class, function () {
            return new CurrencyApiClient();
        });
        $this->app->singleton('Cb', function ($app) {
            return new CurrencyService($app->make(CurrencyApiClient::class));
        });
    }

    public function boot(): void
    {

    }
}