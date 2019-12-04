<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;

class NotifyAdminViaSlack
{
    /**
     * Handle the event.
     *
     * @param  NewCustomerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        dump("Slack message here");
    }
}
