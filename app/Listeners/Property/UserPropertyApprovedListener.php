<?php

namespace App\Listeners\Property;

use App\Events\Property\PropertyApprovedEvent;
use App\Models\User;
use App\Notifications\Property\PropertyApprovedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class UserPropertyApprovedListener
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
     * @param PropertyApprovedEvent $event
     * @return void
     */
    public function handle(PropertyApprovedEvent $event)
    {
        Notification::send(User::query()->find($event->userId), new PropertyApprovedNotification($event->propertyId));
    }
}
