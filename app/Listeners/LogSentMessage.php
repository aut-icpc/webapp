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
        $from = ($message->getFrom() != null ? $message->getFrom() : []);
        $subject = $message->getSubject();
        $body = $message->getBody();
        $to = ($message->getTo() != null ? $message->getTo() : []);
        $cc = ($message->getCc() != null ? $message->getCc() : []);
        $bcc = ($message->getBcc() != null ? $message->getBcc() : []);
        $date = $message->getDate();
        \Log::info(
            'EMAIL SENDING - '.
            'FROM: ' . implode(', ', $from) . ' - ' .
            'SUBJECT: ' . $subject . ' - ' .
            'BODY: ' . $body . ' - ' .
            'TO: ' . implode(', ', $to) . ' - ' .
            'CC: ' . implode(', ', $cc) . ' - ' .
            'BCC: ' . implode(', ', $bcc) . ' - ' .
            'DATE: ' . $date
        );
    }
}
