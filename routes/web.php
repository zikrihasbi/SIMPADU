<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

// Route::get('/', function () {
//  return view('dashboard');
//});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
