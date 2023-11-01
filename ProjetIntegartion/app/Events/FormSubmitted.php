<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Formsitdangereuse;

class FormSubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
       public $formsitdangereuse;

    /**
     * Create a new event instance.
     */
    public function __construct(Formsitdangereuse $formsitdangereuse)
    {
        $this->formsitdangereuse = $formsitdangereuse;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }

   
}
