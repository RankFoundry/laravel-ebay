<?php

namespace RankFoundry\LaravelEbay;

use Illuminate\Support\ServiceProvider;

class EbayServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'config');

    }

    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/../config/ebay.php', 'ebay');

        $this->app->singleton('ebay', function () {
            return new Ebay();
        });
    }
}