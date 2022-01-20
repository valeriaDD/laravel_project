<?php

namespace App\Providers;

use App\Services\DummyRequestActivityLogger;
use App\Services\DebugRequestActivityLogger;
use App\Services\ProductionRequestActivityLogger;
use App\Services\RequestActivityLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestActivityLoggerInterface::class, function(){
            return $this->app->make(RequestActivityLoggerInterface::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
       // Paginator::defaultView('layouts.pagination');
    }
}
