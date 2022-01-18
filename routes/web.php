<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BarangController::class, 'home']);

Route::get('tabel', [BarangController::class, 'index']);

Route::get('/cari/{id}', [BarangController::class, 'cari']);

Route::post('/tambah', [BarangController::class, 'tambah']);

Route::get('/hapus/{id}', [BarangController::class, 'hapus']);

Route::get('/show/{id}', [BarangController::class, 'show']);

Route::post('/edit', [BarangController::class, 'edit']);