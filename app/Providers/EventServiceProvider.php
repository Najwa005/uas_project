<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\MahasiswaCreated;
use App\Events\DosenCreated;
use App\Listeners\CreateUserFromMahasiswaOrDosen;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Registrasi event listener
        Event::listen(MahasiswaCreated::class, CreateUserFromMahasiswaOrDosen::class);
        Event::listen(DosenCreated::class, CreateUserFromMahasiswaOrDosen::class);
    }
}
