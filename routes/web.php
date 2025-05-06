<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InputController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});


//BUAT INPUT BARANG MASUK
Route::get('/barang-masuk', [InputController::class, 'index'])->name('barang-masuk');
Route::get('/barang-tambah', [InputController::class, 'tambah'])->name('tambah-barang');
Route::post('/barang-masuk/kirim', [InputController::class, 'kirim']);
// Route::get('/barang-masuk/edit/{id}', [InputController::class, 'edit'])->name('edit-barang');
// Route::post('/barang-masuk/update/{id}', [InputController::class, 'update']);
// Route::get('/barang-masuk/delete/{id}', [InputController::class, 'destroy']);
// AKHIR

//BUAT INPUT BARANG BARU
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
