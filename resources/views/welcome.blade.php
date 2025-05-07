<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Inventaris</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: whitesmoke;
        }

        .box{
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.183);
            text-align: center;
        }

        a{
            text-decoration: none;
            color: black;
            display: inline-block;
            padding: 20px 40px;
            border-radius: 10px;
        }

        .invent{
            background-color: dodgerblue;
            transition: .3s;
        }

        .invent:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Selamat Datang Di Aplikasi Inventaris 👋</h2>
        <br>
        <a href="{{route('barang')}}" class="invent">Masuk</a>
    </div>
</body>
</html>
