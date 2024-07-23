<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    $data = ['nama' => "Najwa Fitriyani", 'foto' => 'najwa.jpg'];
    return view('dashboard', compact('data'));
})->name('home')->middleware('auth');

Route::get('welcome', function () {
    return view('welcome');
});

Route::resource('/prodi', ProdiController::class)->except('index')->middleware('admin');
Route::get('/prodi', [ProdiController::class, 'index'])->middleware('auth');

// Route untuk mengakses index dari DosenController dengan metode GET
Route::get('/dosen', [DosenController::class, 'index'])->middleware('auth');

// Route resource untuk DosenController yang mencakup metode POST dan lainnya
Route::resource('/dosen', DosenController::class)->except('index')->middleware('auth');



Route::resource('/jadwal', JadwalController::class)->except('index')->middleware('auth');


Route::get('/matkul', [MataKuliahController::class, 'index'])->middleware('auth');

// Route resource untuk MataKuliahController
Route::resource('/matkul', MataKuliahController::class)->except('index')->middleware('auth');


Route::get('/nilai', [NilaiController::class, 'index'])->middleware('auth');

// Route resource untuk NilaiController
Route::resource('/nilai', NilaiController::class)->except('index')->middleware('auth');


Route::resource('/mahasiswa', MahasiswaController::class)->except('index')->middleware('auth');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);