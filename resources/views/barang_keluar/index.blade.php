@extends('welcome')

@section('content')
   <h1>Data Barang Keluar</h1>
    <a href="{{ route('tambah-barang-masuk') }}">Tambah</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID Barang</th>
            <th>Jumlah</th>
            <th>Penerima</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->barang_id }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->penerima }}</td>
                <td>{{ $item->tanggal_keluar }}</td>
                <td>
                    {{-- <a href="{{'route('edit-barang', $item->id)'}}">Edit</a> | --}}
                    <a href="" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
