<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\prodicontroller;

Route::get('/', function () {
    $data = ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg'];
    return view('dashboard', compact('data'));
});

// Route::get('/mahasiswa', function () {
//    return view('mahasiswa', ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg']);
// });

// Route::get('/mahasiswa', 'App\Http\Controllers\mahasiswacontroller@index');
Route::get('/mahasiswa', [mahasiswacontroller::class, 'index' ]);

// Route::get('/prodi', function () {
//    return view('prodi', ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg']);
// });

// Route::get('/prodi', 'App\Http\Controllers\prodicontroller@index');
Route::get('/prodi', [prodicontroller::class, 'index' ]);
