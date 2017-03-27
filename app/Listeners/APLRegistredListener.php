<?php

namespace App\Listeners;

use App\Events\APLRegistered;
use App\Mail\RegistrationPending;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class APLRegistredListener
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
     * @param  APLRegistered  $event
     * @return void
     */
    public function handle(APLRegistered $event)
    {
        $data = $event->registration;
        $emails = [];
        foreach ($data->members as $member) {
            array_push($emails, [
                'email' => $member['email'],
                'name' => $member['first_name'] . ' ' . $member['last_name']
            ]);
        }
        try{
            $resp = \Mail::to($emails)->send(new RegistrationPending($data));
        } catch (\Exception $e){
            Log::info($e->getMessage());
        }
    }
}
