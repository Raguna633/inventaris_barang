<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use datatable

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function data()
    {
        $kategori = Kategori::orderBy('id', 'desc')->get();

        return datatables()
            ->of($kategori)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kategori) {
                return '
                <div class="btn-group">
                    <button onclick="showDetail(`' . route('kategori.show', $kategori->id_kategori) . '`)" class="btn btn-xs btn-success btn-flat"><i class="fa fa-eye"></i></button>
                    <button onclick="editForm(`' . route('kategori.update', $kategori->id_kategori) . '`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`' . route('kategori.destroy', $kategori->id_kategori) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    public function show($id)
    {
        $kategori = Kategori::with('produk')->findOrFail($id);
        $barang = $kategori->barang;
        return response()->json([
            'nama_kategori' => $kategori->nama_kategori,
            'barang'        => $barang->map(fn($p) => [
                'nama'  => $p->nama_barang,
                'stok'  => $p->jumlah,
            ]),
        ]);
    }

    public function showDetail($id)
    {
        $kategori = Kategori::with('produk')->findOrFail($id);
        return response()->json([
            'nama_kategori' => $kategori->nama_kategori,
            'produk'        => $kategori->barang->map(fn($p) => [
                'nama_barang'  => $p->nama_barang,
                'jumlah'  => $p->jumlah,
            ]),
        ]);
    }


    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return response(null, 204);
    }
}
