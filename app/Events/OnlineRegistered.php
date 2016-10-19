<?php

namespace App\Events;

use App\OnlineRegistration;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OnlineRegistered
{
    use InteractsWithSockets, SerializesModels;

    public $registration;

    /** Create a new event instance.
     *
     * OnlineRegistered constructor.
     * @param OnlineRegistration $registration
     */
    public function __construct(OnlineRegistration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
