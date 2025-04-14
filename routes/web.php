<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PeriksaPasienController;


Route::get('/dokter', [HomeController::class, 'dokter'])-> name('dokter');
Route::prefix('dokter')->group (function(){
Route::resource('obat', ObatController::class);
Route::resource('periksa', PeriksaController::class);
});

Route::get('/pasien', [HomeController::class, 'pasien'])-> name('pasien');
Route::prefix('pasien')->group (function(){
Route::resource('riwayat', RiwayatController::class);
Route::resource('periksa', PeriksaPasienController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');