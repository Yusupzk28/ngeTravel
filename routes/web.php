<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/destinasi/tambah', [DestinasiController::class, 'create']);
Route::post('/destinasi/store', [DestinasiController::class, 'store']);
Route::get('/destinasi/edit/{id}', [DestinasiController::class, 'edit']);
Route::put('/destinasi/update/{id}', [DestinasiController::class, 'update']);
Route::get('/destinasi/hapus/{id_destinasi}', [DestinasiController::class, 'delete'])->name('destinasi.hapus');
Route::resource('destinasi', DestinasiController::class);
Route::delete('/destinasi/hapus/{id_destinasi}', [DestinasiController::class, 'destroy']);
Route::get('/dashboard', function () {
    return view('layouts.app');
})->name('dashboard');