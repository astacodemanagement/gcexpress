<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelebihanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('back.dashboard');
// });

Route::resource('/', DashboardController::class);
Route::resource('/beranda', BerandaController::class);
Route::resource('/profil_umum', ProfilController::class);
Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
Route::resource('/users', UserController::class);
Route::resource('/slider', SliderController::class);
Route::resource('/layanan', LayananController::class);
Route::resource('/mitra', MitraController::class);
Route::resource('/kelebihan', KelebihanController::class);
