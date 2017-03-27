<?php

namespace App\Events;

use App\APLRegistration;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class APLRegistered
{
    use InteractsWithSockets, SerializesModels;

    /**
     * The Main Data!
     *
     * @var APLRegistration
     */
    public $registration;

    /**
     * Create a new event instance.
     *
     * @param APLRegistration $registration
     */
    public function __construct(APLRegistration $registration)
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
