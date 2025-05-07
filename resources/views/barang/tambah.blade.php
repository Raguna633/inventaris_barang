@extends('welcome')

@section('content')
    <h1>Tambah Barang</h1>
    <form action="/barang/kirim" method="POST">
        @csrf
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>

        <select name="id_kategori">
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>

        <input type="number" name="jumlah" placeholder="Jumlah" required>
        <input type="text" name="keterangan" placeholder="Keterangan" required>
        <input type="number" name="jumlah_baik" placeholder="Jumlah Baik" required>
        <input type="number" name="jumlah_kurang_baik" placeholder="Jumlah Kurang Baik" required>
        <input type="date" name="tanggal" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('barang') }}">Kembali</a>
@endsection
