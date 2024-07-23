<?php

namespace App\Listeners;

use App\Events\MahasiswaCreated; // Sesuaikan dengan nama event yang sesuai
use App\Events\DosenCreated; // Sesuaikan dengan nama event yang sesuai
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserFromMahasiswaOrDosen
{
    public function handle($event)
    {
        $type = 0; // Default type untuk Mahasiswa
        if ($event instanceof DosenCreated) {
            $type = 2; // Type untuk Dosen
        }

        User::create([
            'name' => $event->user->nama,
            'email' => $event->user->nim ?? $event->user->nip,
            'password' => Hash::make($event->user->nim ?? $event->user->nip),
            'type' => $type,
        ]);
    }
}
