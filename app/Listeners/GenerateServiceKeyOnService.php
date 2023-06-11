<?php

namespace App\Listeners;

use App\Events\ServiceKeyGenerated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateServiceKeyOnService
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
     * @param ServiceKeyGenerated $event
     * @return void
     */
    public function handle(ServiceKeyGenerated $event)
    {
        //handles the service
    }
}
