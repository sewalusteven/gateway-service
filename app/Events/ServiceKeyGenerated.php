<?php

namespace App\Events;

use App\Http\Payloads\ServiceKeyBody;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ServiceKeyGenerated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    private ServiceKeyBody $serviceKeyBody;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ServiceKeyBody $serviceKeyBody)
    {
        //
        $this->serviceKeyBody = $serviceKeyBody;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
