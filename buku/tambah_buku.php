<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO buku (judul,penulis,penerbit,tahun_terbit) VALUES ('$judul','$penulis','$penerbit','$tahun_terbit')";
    if (mysqli_query($conn, $sql)) {
        echo "data sukses ditambahkan";
        header("Location: buku.php");
    } else {
        echo "gagal";
    }
}
?>

<html>

<body>
    <form method="post">
        <label for="judul">Judul Buku</label>
        <input type="text" id="judul" name="judul" required>

        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis" required>

        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" required>

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" id="tahun_terbit" name="tahun_terbit" required>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>