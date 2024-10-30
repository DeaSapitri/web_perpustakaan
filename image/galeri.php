<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <style>
        .header{
            font-style: soria;
            background-color: whitesmoke;
            text-align: center;
        }

        .card{
            background-color: whitesmoke;
            text-align: center;
            width: 300px;
            height: 400px;
            border-radius: 5px;
            margin: 10px;
            padding: 5px;
            float: left;
        }

        .card:hover{
            background-color: white;
            border: 1px solid skyblue;
            color: skyblue;
            box-shadow: 0 0 10px skyblue;
        }

        .gambar{
            width: 200px;
            height: 250px;
        }

        .card a{
            background-color: white;
            border: 1px solid black;
            text-decoration: none;
            color: skyblue;
            padding: 10px;
            border-radius: 15px;
        }

        .card a:hover{
            background-color: skyblue;
            border: 1px solid black;
            color: black;
            box-shadow: 0 0 10px skyblue;
        }
    </style>
</head>
<body>
    <div class="header">
    <h2>Book's Gallery</h2>
    </div>
    <div class="konten">
        <div class="card">
            <img src="dilan.jfif" alt="" class="gambar">
            <h3>Dilan 1990</h3>
            <p>Rp.98.0000</p>
            <a class="tombol" href="">Detail</a>
        </div>

        <div class="card">
            <img src="mariposa.jfif" alt="" class="gambar">
            <h3>Mariposa</h3>
            <p>Rp.90.000</p>
            <a class="tombol" href="">Detail</a>
        </div>

        <div class="card">
            <img src="bumi_manusia.jpg" alt="" class="gambar">
            <h3>Bumi Manusia</h3>
            <p>Rp.80.000</p>
            <a class="tombol" href="">Detail</a>
        </div>

        <div class="card">
            <img src="laut_bercerita.jfif" alt="" class="gambar">
            <h3>Laut Bercerita</h3>
            <p>Rp.78.000</p>
            <a class="tombol" href="">Detail</a>
        </div>
    </div>
</body>
</html>