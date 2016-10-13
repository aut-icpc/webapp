<?php

namespace App\Listeners;

use App\Events\OnSiteRegistered;
use App\Mail\RegistrationPending;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OnSiteRegistrationListener
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
     * @param  OnSiteRegistered  $event
     * @return void
     */
    public function handle(OnSiteRegistered $event)
    {
        $data = $event->registration;
        $emails = [];
        foreach ($data->members as $member){
            array_push($emails, [
                'email' => $member['email'],
                'name' => $member['first_name'] . ' ' . $member['last_name']
            ]);
        }
        $resp = \Mail::to($emails)->send(new RegistrationPending($data));
//        \Log::info('RESP IS : ' . $resp);
    }
}
