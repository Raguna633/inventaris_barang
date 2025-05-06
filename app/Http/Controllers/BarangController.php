<?php

namespace App\Http\Controllers;

//MODEL BARANG
use App\Models\Barang;
//
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index(){
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }
}
