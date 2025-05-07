<?php

namespace App\Http\Controllers;

//MODEL BARANG
use App\Models\Barang;
use App\Models\Kategori;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index(){
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    public function tambah(){
        $kategori = Kategori::all();
        return view('barang.tambah', compact('kategori'));
    }

    public function kirim(Request $request) {
        Barang::create($request->all());
        return redirect('/barang');
    }

    public function hapus($id) {

        $barang = Barang::findorfail($id);
        $barang->delete();
        // Redirect ke halaman produk dengan pesan sukses
        return redirect()->route('barang')->with('success', 'Produk berhasil dihapus');
    }

}
