<?php

namespace App\Listeners;

use Illuminate\Mail\Events\MessageSending;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSentMessage
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
     * @param  MessageSending  $event
     * @return void
     */
    public function handle(MessageSending $event)
    {
        $message = $event->message;
        \Log::info(
            'EMAIL SENDING - '.
            'FROM: ' . implode(', ', $message->getFrom()) . ' - ' .
            'SUBJECT: ' . $message->getSubject() . ' - ' .
            'BODY: ' . $message->getBody() . ' - ' .
            'TO: ' . implode(', ', $message->getTo()) . ' - ' .
            'CC: ' . implode(', ', $message->getCc()) . ' - ' .
            'BCC: ' . implode(', ', $message->getBcc()) . ' - ' .
            'DATE: ' . $message->getDate()
        );
    }
}
