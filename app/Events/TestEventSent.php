<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestEventSent extends BroadcastEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public array $event;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $event)
    {
        $this->event = $event;
    }

    public function channels(): array
    {
        return [
            new PrivateChannel('all'),
        ];
    }
}
