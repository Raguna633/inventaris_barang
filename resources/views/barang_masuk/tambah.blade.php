<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>

<body>
    <h1>Tambah Barang Masuk</h1>
    <form action="/barang-masuk/kirim" method="POST">
        @csrf
        <input type="text" name="nama_barang" placeholder="Nama Barang" required><br><br>
        <input type="number" name="jumlah" placeholder="Jumlah" required><br><br>
        <input type="text" name="pengirim" placeholder="Pengirim" required><br><br>
        <input type="date" name="tanggal" required><br><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('barang-masuk') }}">Kembali</a>
</body>

</html>
