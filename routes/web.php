<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InputController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\KategoriController;
use App\Models\Barang;

Route::get('/', function () {
    return view('welcome');
});


//BUAT INPUT BARANG MASUK
Route::get('/barang-masuk', [InputController::class, 'index'])->name('barang-masuk');
Route::get('/barang-masuk-tambah', [InputController::class, 'tambah'])->name('tambah-barang-masuk');
Route::post('/barang-masuk/kirim', [InputController::class, 'kirim']);
// Route::get('/barang-masuk/edit/{id}', [InputController::class, 'edit'])->name('edit-barang');
// Route::post('/barang-masuk/update/{id}', [InputController::class, 'update']);
// Route::get('/barang-masuk/delete/{id}', [InputController::class, 'destroy']);
// AKHIR

//BUAT INPUT BARANG KELUAR
Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar');
Route::get('/barang-keluar-tambah', [BarangKeluarController::class, 'tambah'])->name('tambah-barang-keluar');
Route::post('/barang-keluar/kirim', [BarangKeluarController::class, 'kirim']);


//BUAT INPUT BARANG BARU
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang-tambah', [BarangController::class, 'tambah'])->name('tambah-barang');
Route::post('/barang/kirim', [BarangController::class, 'kirim']);
Route::get('/barang/delete/{id}', [BarangController::class, 'hapus'])->name('hapus-barang');


//BUAT KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('/kategori/kirim', [KategoriController::class, 'kirim']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'hapus'])->name('hapus-kategori');
