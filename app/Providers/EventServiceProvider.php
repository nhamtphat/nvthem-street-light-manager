<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\TurnOnProvinceEvent' => ['App\Listeners\TurnOnProvinceListener'],
        'App\Events\TurnOffProvinceEvent' => ['App\Listeners\TurnOffProvinceListener'],
        'App\Events\TurnOnProvinceEvent' => ['App\Listeners\TurnOnProvinceListener'],
        'App\Events\BrightnessChangeProvinceEvent' => ['App\Listeners\BrightnessChangeProvinceListener'],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
