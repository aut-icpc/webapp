<?php

namespace App\Mail;

use App\APLRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class APLRegistred extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * On-Site contest Registration Model
     *
     * @var APLRegistration
     */
    public $registration;

    /**
     * Create a new message instance.
     *
     * @param APLRegistration $registration
     */
    public function __construct(APLRegistration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.apl.pending');
    }
}
