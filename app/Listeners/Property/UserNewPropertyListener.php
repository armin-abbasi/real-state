<?php

namespace App\Listeners\Property;

use App\Events\Property\PropertyCreatedEvent;
use App\Models\User;
use App\Notifications\Property\PropertyApprovedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class UserNewPropertyListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param PropertyCreatedEvent $event
     * @return void
     */
    public function handle(PropertyCreatedEvent $event)
    {
        Notification::send($event->user, new PropertyApprovedNotification($event->propertyId));
    }
}
