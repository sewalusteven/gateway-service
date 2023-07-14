<?php

namespace App\Listeners;

use App\Events\SessionTokenCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class UpdateInventoryServiceWithToken
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
     * @param SessionTokenCreated $event
     * @return void
     */
    public function handle(SessionTokenCreated $event)
    {
        //
        info("token ".$event->token." has been sent to the inventory service");
        //Http::post("http://localhost/inventory/add-token",['token'=> $event->token]);
    }
}
