<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeNewCustomerListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        sleep(10);

        Mail::to($event->customer->email)->send(new WelcomeNewUserMail());
    }
}
