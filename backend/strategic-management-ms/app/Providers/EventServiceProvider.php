<?php

namespace App\Providers;

use App\Jobs\UserCalculatedFreight;
use App\Jobs\UserTrackedPackage;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        \App::bindMethod(UserTrackedPackage::class, '@handle', function ($job) {
            return $job->handle();
        });

        \App::bindMethod(UserCalculatedFreight::class, '@handle', function ($job) {
            return $job->handle();
        });
    }
}
