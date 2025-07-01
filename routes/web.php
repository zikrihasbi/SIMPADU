<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Mahasiswa;

// Route::get('/', function () {
//  return view('dashboard');
//});

Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa', [MahasiswaController::class, 'store']);
// Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('prodi', ProdiController::class);

