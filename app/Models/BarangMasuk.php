<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    //
    protected $fillable = [
        'barang_id',
        'jumlah',
        'pengirim',
        'tanggal_masuk'
    ];
}
