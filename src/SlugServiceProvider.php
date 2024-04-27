<?php

namespace Nihir\SlugService;

use Illuminate\Support\ServiceProvider;
use Nihir\Services\SlugService;
use Nihir\SlugService\Console\Commands\PublishResources;

class SlugServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Services' => base_path('app/Services'),
        ], 'slug-service-resources');
    }

    // Add this method to your service provider
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishResources::class,
            ]);
        }
    }
}
