<?php

use App\Models\Laracrud;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaracrudController;
use App\Http\Controllers\HomeController;


Route::get('/cek', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});


Route::post('/tambah-data', [LaracrudController::class, 'store'])->name('tambah.data');
Route::get('/home', [HomeController::class, 'index']);
