<?php

namespace App\Listeners;

use App\Events\GroupEmailSubmission;
use App\Mail\CustomMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GroupEmailSubmissionListener
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
     * @param  GroupEmailSubmission  $event
     * @return void
     */
    public function handle(GroupEmailSubmission $event)
    {
        \Mail::to($event->to)->cc($event->cc)->bcc($event->bcc)->send(new CustomMail($event->title, $event->message));
    }
}
