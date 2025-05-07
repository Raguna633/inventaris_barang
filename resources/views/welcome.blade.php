<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Inventaris</title>
    <style>
        /* *{
            transition: .3s;
        } */
        a{
            text-decoration: none;
        }
        body{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            background-color: whitesmoke;
        }

        header{
            display: block;
            padding: 10px;
            background-color: dodgerblue;
            color: white
        }

        section{
            display: flex;
            justify-content: start;
            height: 100vh;
        }

        .sidebar{
            background-color: rgb(99, 99, 99);
            width: 20%;
        }

        .sidebar a{
            display: block;
            padding: 15px;
            color:white;
        }

        .sidebar a:hover{
            background-color: dodgerblue;
        }

        .content{
            padding: 20px;
            width: 80%;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        th, td{
            border: 1px solid black;
            text-align: center;
        }

        th{
            background-color: dodgerblue;
        }

        form{
            padding: 0px 20px 0px 0px;
        }

        input{
            display: block;
            border: 1px solid black;
            padding: 10px;
            width: 100%;
            background: none;
            border-radius: 10px;
            margin-bottom: 10px;;
        }

        input[type=date], select{
            display: inline-block;
            width: 20%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        input:focus{
            outline: 2px solid deepskyblue;
        }

        button[type=submit]{
            background: none;
            border: none;
            background-color: mediumaquamarine;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <header>
        <h1>Aplikasi Inventaris</h1>
    </header>

    <section>
    <div class="sidebar">
            <a href="{{route('barang-masuk')}}">Barang Masuk</a>
            {{-- crud di dalam --}}
            <a href="">Barang Keluar</a>
            <a href="{{route('barang')}}">Barang</a>
            <a href="{{route('kategori')}}">Kategori</a>
    </div>

    <div class="content">
        {{-- page --}}
        @yield('content')
    </div>
    </section>

</body>
</html>
