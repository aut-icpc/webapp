<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\CustomEmailSubmission' => [
            'App\Listeners\CustomEmailSubmissionListener',
        ],
        'App\Events\GroupEmailSubmission' => [
            'App\Listeners\GroupEmailSubmissionListener',
        ],
        'App\Events\OnSiteRegistered' => [
            'App\Listeners\OnSiteRegistrationListener',
        ],
        'App\Events\OnlineRegistered' => [
            'App\Listeners\OnlineRegistrationListener',
        ],
        'Illuminate\Mail\Events\MessageSending' => [
            'App\Listeners\LogSentMessage',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
