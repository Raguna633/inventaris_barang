<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
        Route::resource('/kategori', KategoriController::class);