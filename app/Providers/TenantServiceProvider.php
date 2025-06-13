<?php

namespace App\Providers;

use App\Models\Tenant;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class TenantServiceProvider extends ServiceProvider
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
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('tenant', app()->bound('tenant') ? app('tenant') : null);
        });
        // App::bind('tenant', function () {
        //     // Fetch tenant logic, e.g., from subdomain or session
        //     return Tenant::where('slug', request()->getHost())->firstOrFail();
        // });
    }
}
