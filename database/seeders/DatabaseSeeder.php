<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::create([
        //     'name' => 'Admin User',
        //     'type' => 1, // 1 mengindikasikan tipe pengguna sebagai Admin
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'), // Ganti dengan password yang lebih kuat
        // ]);


        User::create([
            'user' => 'E020322107',
            'password' => bcrypt('E020322107'),
            'role' => 'mahasiswa'
        ]);

        User::create([
            'user' => 'E020322108',
            'password' => bcrypt('E020322108'),
            'role' => 'mahasiswa'
        ]);

        User::create([
            'user' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);
        
        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);
        

        Prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322107',
            'nama' => 'Najwa Fitriyani',
            'no_hp' => '+6282149323972',
            'alamat' => 'Ratu Zaleha',
            'foto' => 'najwa.jpg',
            'password' => '123',
            'prodi_id' => 1,
        ]);
        Mahasiswa::create([
            'nim' => 'E020322108',
            'nama' => 'Noor Riska',
            'no_hp' => '+628115015095',
            'alamat' => 'Sungai Andai',
            'foto' => 'najwa.jpg',
            'password' => '123',
            'prodi_id' => 2,
        ]);

        Mahasiswa::factory(100)->create();

       
    }
}
