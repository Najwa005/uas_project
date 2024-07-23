<?php

namespace App\Events;

use App\Models\Dosen;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DosenCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $dosen;

    public function __construct(Dosen $dosen)
    {
        $this->dosen = $dosen;
    }
}
