<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        $data = BarangMasuk::all();
        return view('barang_masuk.index', compact('data'));
    }

    public function tambah(){
        return view('barang_masuk.tambah');
    }

    public function kirim(Request $request) {
        BarangMasuk::create($request->all());
        return redirect('/barang-masuk');
    }

    // public function edit($id){
    //     $item = BarangMasuk::findOrFail($id);
    //     return view('barang_masuk.edit', compact('item'));
    // }
}
