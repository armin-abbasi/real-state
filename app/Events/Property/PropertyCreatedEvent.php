<?php

namespace App\Events\Property;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PropertyCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var int $propertyId
     */
    public $propertyId;

    /**
     * @var Authenticatable
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param Authenticatable $user
     * @param int $propertyId
     */
    public function __construct(Authenticatable $user, int $propertyId)
    {
        $this->user = $user;
        $this->propertyId = $propertyId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
