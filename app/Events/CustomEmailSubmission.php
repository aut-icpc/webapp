<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CustomEmailSubmission
{
    use InteractsWithSockets, SerializesModels;

    public $title;
    public $message;
    public $to;
    public $cc;
    public $bcc;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($to, $cc, $bcc, $title, $message)
    {
        $this->to = $to;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->message = $message;
        $this->title = $title;
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
