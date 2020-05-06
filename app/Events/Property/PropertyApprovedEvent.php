<?php

namespace App\Events\Property;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PropertyApprovedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $propertyId;

    /**
     * Create a new event instance.
     *
     * @param int $userId
     * @param int $propertyId
     */
    public function __construct(int $userId, int $propertyId)
    {
        $this->userId = $userId;
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
