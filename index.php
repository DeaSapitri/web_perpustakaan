<?php
include 'koneksi.php'
  ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Website perpustakan dea</title>
  <link rel="stylesheet" href="style2.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      flex-direction: column;
      min-height: 100vh;
      background: url('image/perpus.webp') no-repeat;
      background-size: cover;
      background-position: center;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 100px;
      background: #76ace3;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 99;
    }

    .logo {
      font-size: 2em;
      color: #FFFFFF;
      user-select: none;
    }

    .navigation a {
      position: relative;
      font-size: 1.1em;
      color: #FFFFFF;
      text-decoration: none;
      font-weight: 500;
      margin-left: 40px;
    }

    .navigation a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 100%;
      height: 3px;
      background: #FFFFFF;
      border-radius: 5px;
      transform-origin: right;
      transform: scalex(0);
      transition: transform .5s;
    }

    .navigation a:hover::after {
      transform-origin: left;
      transform: scalex(1);
    }

    .navigation .btnlogin-popup {
      width: 130px;
      height: 50px;
      background: transparent;
      border: 2px solid #FFFFFF;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: #FFFFFF;
      font-weight: 500;
      margin-left: 40px;
    }

    .home {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      padding: 50px 8% 0;
    }

    .home-content {
      max-width: 630px;
    }

    .home-content h1 {
      font-size: 50px;
      line-height: 1.2;
      color: #141414;
    }

    .home-content h3 {
      font-size: 40px;
      color: #141414;
    }

    .home-content p {
      font-size: 16px;
      color: #141414;
      margin: 15px 0 30px;
    }

    .btn {
      display: inline-block;
      padding: 10px 28px;
      background: #76ace3;
      border: 2px solid #666666;
      border-radius: 6px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      font-size: 16px;
      color: #FFFFFF;
      letter-spacing: 1px;
      text-decoration: none;
      font-weight: 600;
    }

    .btn:hover {
      background: transparent;
      color: #003399;
    }
  </style>
  <script>
    function confirmLogout(event) {
      event.preventDefault();
      var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
      if (confirmLogout) {
        window.location.href = event.target.href;
      }
    }
  </script>
</head>

<body>
  <header>
    <h2 class="logo">Perpustakaan Dea</h2>
    <nav class="navigation">
      <a href="index.php">HOME</a>
      <a href="buku/buku.php">Buku</a>
      <a href="kategori/kategori.php">Kategori</a>
      <a href="peminjaman/peminjaman.php">Peminjaman</a>
      <?php
      if (isset($_SESSION['username'])) {

        echo '<a href="logout.php" onclick="confirmLogout(event)"> <i data-feather="log-out"></i> Logout</a>';
      } else {

        echo '<a href="login.php"> <i data-feather="log-in"></i> Login</a>';
      }

      ?>
    </nav>
  </header>

  <section class="home">
    <div class="home-content">
      <h1>Tingkatkan wawasanmu dengan Literasi</h1>
      <h3>Dea Library's</h3>
      <p>Menyediakan Buku Novel, Majalah, dan lain lain</p>
      <a href="image/galeri.php" class="btn">Explore Book</a>
    </div>
  </section>
  <script src="login.php"></script>
  </a>
</body>

</html>