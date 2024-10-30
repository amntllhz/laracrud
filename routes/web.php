<?php

use App\Models\Laracrud;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaracrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;


Route::get('/cek', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/set-session', [HomeController::class, 'setSession']);

// other
Route::post('/tambah-data', [LaracrudController::class, 'store'])->name('tambah.data');
Route::get('/home', [HomeController::class, 'index']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

