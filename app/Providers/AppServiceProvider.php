<?php

namespace App\Providers;

use App\Models\AvailableTime;
use App\Observers\TimeSlotObserve;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        AvailableTime::observe(TimeSlotObserve::class);
        //
    }
}
