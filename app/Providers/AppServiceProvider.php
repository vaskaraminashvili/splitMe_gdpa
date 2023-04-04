<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::anonymousComponentPath(base_path() . '/resources/web/views');
        Blade::anonymousComponentPath(base_path() . '/resources/admin/views');
        $this->loadViewsFrom(base_path('resources/admin/views/'), 'admin');
        $this->loadViewsFrom(base_path('resources/web/views/'), 'web');
    }
}
