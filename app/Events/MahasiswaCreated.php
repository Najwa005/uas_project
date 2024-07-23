<?php

namespace App\Events;

use App\Models\Mahasiswa;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MahasiswaCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mahasiswa;

    public function __construct(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }
}
