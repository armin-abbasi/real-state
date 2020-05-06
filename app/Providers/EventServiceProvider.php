<?php

namespace App\Providers;

use App\Events\Property\PropertyApprovedEvent;
use App\Events\Property\PropertyCreatedEvent;
use App\Listeners\Property\UserNewPropertyListener;
use App\Listeners\Property\UserPropertyApprovedListener;
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
        PropertyApprovedEvent::class => [
            UserPropertyApprovedListener::class,
        ],
        PropertyCreatedEvent::class => [
            UserNewPropertyListener::class,
        ]
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
