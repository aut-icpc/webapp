<?php

namespace App\Listeners;

use App\Events\OnlineRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OnlineRegistrationListener
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
     * @param  OnlineRegistered  $event
     * @return void
     */
    public function handle(OnlineRegistered $event)
    {
        $data = $event->registration;
        $emails = [];
        foreach ($data->members as $member){
            array_push($emails, [
                'email' => $member['email'],
                'name' => $member['first_name'] . ' ' . $member['last_name']
            ]);
        }
        $resp = \Mail::to($emails)->send(new \App\Mail\OnlineRegistered($data));
//        \Log::info('RESP IS : ' . $resp);
    }
}
