<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('barang_keluar.index', compact('data'));
    }

    public function tambah(){
        $barang = Barang::all();
        return view('barang_keluar.tambah', compact('barang'));
    }

    public function kirim(Request $request) {
        BarangMasuk::create($request->all());
        $barang = Barang::findorfail($request->barang_id);

        // Tambahkan jumlah ke stok
        if ($barang) {
            $barang->jumlah += $request->jumlah;
            $barang->save(); // simpan perubahan stok
        }
        return redirect('/barang-masuk');

    }


    // public function edit($id){
    //     $item = BarangMasuk::findOrFail($id);
    //     return view('barang_keluar.edit', compact('item'));
    // }
}
