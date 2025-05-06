<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang Masuk</title>
</head>

<body>

    <h1>Data Barang Masuk</h1>
    <a href="{{ route('tambah-barang') }}">Tambah</a> |
    <a href="{{ route('barang') }}">Barang</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->barang_id }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->pengirim }}</td>
                <td>{{ $item->tanggal_masuk }}</td>
                <td>
                    {{-- <a href="{{'route('edit-barang', $item->id)'}}">Edit</a> | --}}
                    <a href="" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>
