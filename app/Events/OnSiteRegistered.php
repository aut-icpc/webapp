<?php

namespace App\Events;

use App\OnsiteRegistration;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OnSiteRegistered
{
    use InteractsWithSockets, SerializesModels;

    /**
     * The Main Data!
     *
     * @var OnsiteRegistration
     */
    public $registration;

    /**
     * Create a new event instance.
     *
     * OnSiteRegistered constructor.
     * @param OnsiteRegistration $registration
     */
    public function __construct(OnsiteRegistration $registration)
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
