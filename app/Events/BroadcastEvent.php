<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Automatically adds broadcast namespace to all channel names.
 */
abstract class BroadcastEvent implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    abstract public function channels(): array;

    final public function broadcastOn()
    {
        $namespaceSuffix = '.'.env('BROADCAST_NAMESPACE');

        return collect($this->channels())->map(function ($channel) use ($namespaceSuffix) {
            if ($channel instanceof Channel) {
                $channel->name = $channel->name.$namespaceSuffix;

                return $channel;
            }

            return $channel.$namespaceSuffix;
        })->toArray();
    }
}
