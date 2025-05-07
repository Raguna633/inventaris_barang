@extends('welcome')

@section('content')
    <h1>Tambah Barang Masuk</h1>
    <form action="/barang-masuk/kirim" method="POST">
        @csrf
        <select name="barang_id">
            <option value="">-- Pilih Barang --</option>
            @foreach($barang as $barang)
                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
            @endforeach
        </select>
        <input type="number" name="jumlah" placeholder="Jumlah" required>
        <input type="text" name="penerima" placeholder="Penerima" required>
        <input type="date" name="tanggal_masuk" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('barang-keluar') }}">Kembali</a>
@endsection
