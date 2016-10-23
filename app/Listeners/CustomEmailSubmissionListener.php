<?php

namespace App\Listeners;

use App\Events\CustomEmailSubmission;
use App\Mail\CustomMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomEmailSubmissionListener
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
     * @param  CustomEmailSubmission  $event
     * @return void
     */
    public function handle(CustomEmailSubmission $event)
    {
        \Mail::to($event->to)->cc($event->cc)->bcc($event->bcc)->send(new CustomMail($event->title, $event->message));
    }
}
