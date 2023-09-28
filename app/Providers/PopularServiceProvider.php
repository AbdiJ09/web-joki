<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class PopularServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer(['components.popular'], function ($view) {
            $popularServices = Service::where('popularitas', '>', 20)
                ->orderBy('popularitas', 'desc')
                ->limit(5)
                ->get();
            $view->with('popularServices', $popularServices);
        });
    }
}
