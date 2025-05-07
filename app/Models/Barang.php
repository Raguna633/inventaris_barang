<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    protected $fillable = [
        'nama_barang',
        'jumlah',
        'keterangan',
        'jumlah_baik',
        'jumlah_kurang_baik',
        'id_kategori'
    ];
}
