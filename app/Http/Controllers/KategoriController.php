<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori::all();
        return view('kategori', compact('data'));
    }

    public function kirim(Request $request) {
        Kategori::create($request->all());
        return redirect('/kategori');
    }

    public function hapus($id) {

    $kategori = Kategori::findorfail($id);
    $kategori->delete();
    // Redirect ke halaman produk dengan pesan sukses
    return redirect()->route('kategori')->with('success', 'Produk berhasil dihapus');
    }
}
