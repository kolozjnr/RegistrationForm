<?php

namespace App\Providers;

use App\Repository\IUserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\UserRegistrationRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class, UserRegistrationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
