<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\IQrCodeService;
use App\Services\Impl\QrCodeService;
use App\Services\Impl\MockQrCodeService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Services\IQrCodeService::class,
            \App\Services\Impl\MockQrCodeService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
