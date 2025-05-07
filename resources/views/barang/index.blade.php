@extends('welcome')

@section('content')

    <h1>Data Barang</h1>
    <a href="{{ route('tambah-barang') }}">Tambah</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Jumlah Baik</th>
            <th>Jumlah Kurang Baik</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->jumlah_baik }}</td>
                <td>{{ $item->jumlah_kurang_baik }}</td>
                <td>{{ $item->id_kategori }}</td>
                <td>
                    {{-- <a href="{{'route('edit-barang', $item->id)'}}">Edit</a> | --}}
                    <a href="{{route('hapus-barang', $item->id)}}" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
