<?php

namespace Nihir\SlugService;

use Illuminate\Support\ServiceProvider;
use Nihir\Services\SlugService;

class SlugServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // For Publishing Resources
        $this->publishes([
            __DIR__.'/Services' => app_path('Services'),
        ]);
    }

    public function register()
    {
        $this->app->bind('slug', function () {
            return new SlugService();
        });
    }
}
