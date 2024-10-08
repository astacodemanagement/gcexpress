<?php

use App\Http\Controllers\AlasanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KelebihanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TahapController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('back.dashboard');
// });

Route::resource('/', BerandaController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/profil_umum', ProfilController::class);
Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
Route::resource('/users', UserController::class);
Route::resource('/slider', SliderController::class);
Route::resource('/layanan', LayananController::class);
Route::resource('/tahap', TahapController::class);
Route::resource('/alasan', AlasanController::class);
Route::resource('/dokumentasi', DokumentasiController::class);
Route::resource('/mitra', MitraController::class);
Route::resource('/faq', FaqController::class);
Route::resource('/kelebihan', KelebihanController::class);
Route::resource('/kategori_berita', KategoriBeritaController::class);
Route::resource('/berita', BeritaController::class);
Route::get('/halaman_berita', [BerandaController::class, 'halaman_berita']);
Route::get('/login', [BerandaController::class, 'login']);
Route::get('/pendaftaran', [BerandaController::class, 'pendaftaran']);
Route::post('/pendaftaran/store', [BerandaController::class, 'store'])->name('pendaftaran.store');
Route::get('/dokumentasi_umum', [BerandaController::class, 'dokumentasi_umum']);

