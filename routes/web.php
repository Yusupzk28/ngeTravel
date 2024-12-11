<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PaketController;

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
Route::get('/paket', [PaketController::class, 'index']);
Route::get('/paket/tambah', [PaketController::class, 'create']);
Route::post('/paket/store', [PaketController::class, 'store']);
Route::get('/paket/edit/{id_paket}', [PaketController::class, 'edit']);
Route::put('/paket/update/{id_paket}', [PaketController::class, 'update']);
Route::get('/paket/hapus/{id_paket}', [PaketController::class, 'confirmDelete']);
Route::delete('/paket/hapus/{id_paket}', [PaketController::class, 'destroy']);
Route::get('/paket/cetak', [PaketController::class, 'cetak']); 
Route::get('/paket/pdf', [PaketController::class, 'pdf']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/ngetravelDestinasi', [DestinasiController::class, 'indexNgetravel'])->name('ngetravelDestinasi');
Route::get('/ngetravelPaket', [PaketController::class, 'indexNgetravel'])->name('ngetravelPaket');
Route::get('/', function () {
    return view('welcome');
})->name('beranda');