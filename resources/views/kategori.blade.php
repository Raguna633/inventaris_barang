@extends('welcome')

@section('content')
   <h1>Data Kategori</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kategori }}</td>
                <td>
                    {{-- <a href="{{'route('edit-barang', $item->id)'}}">Edit</a> | --}}
                    <a href="{{route('hapus-kategori', $item->id)}}" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <h1>Tambah Kategori</h1>
    <form action="/kategori/kirim" method="POST">
        @csrf
        <input type="text" name="nama_kategori" placeholder="Nama kategori" required><br><br>
        <button type="submit">Simpan</button>
    </form>
@endsection
