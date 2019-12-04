<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;

class RegisterCustomerToNewsLetter
{
      /**
     * Handle the event.
     *
     * @param  NewCustomerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        dump("Registered to newsletter");
    }
}
