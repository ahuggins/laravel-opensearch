<?php

namespace AHuggins\OpenSearch\Providers;

use Illuminate\Support\ServiceProvider;

class OpenSearchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');

        $this->publishes([
            __DIR__.'/../config/opensearch.php' => config_path('opensearch.php'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/../views', 'opensearch');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('opensearch', 'AHuggins\OpenSearch\OpenSearch');
    }
}
