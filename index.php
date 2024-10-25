<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fotoperpus {
    height: 200px;
    width: 20 0px;
    background-image: url(image/perpus.webp);
  }

  .fotobuku {
    height: 200px;
    width: 10 0px;
    margin-top: 10px;
    background-image: url(image/buku.jpg);
  }

  .fotobuku2 {
    height: 200px;
    background-image: url(image/buku2.jfif);
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Perpustakaan Dea</h1>
  <p>Mari Membaca Buku</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="buku/buku.php">Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategori/kategori.php">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peminjaman/peminjaman.php">Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="layout.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Library</h2>
      <h5>Photo of Perpustakaan:</h5>
      <div class="fotoperpus">Room Book</div>
      <p>Tingkatkan wawasanmu dengan membaca</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="buku/buku.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kategori/kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peminjaman/peminjaman.php">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fotobuku">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fotobuku2">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
