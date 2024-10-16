<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kategori = $_POST['nama_kategori'];
    
    $sql = "INSERT INTO kategori_buku (nama_kategori) VALUES ('$nama_kategori')";
    if (mysqli_query($conn, $sql)) {
        echo "data sukses ditambahkan";
        header("Location: kategori.php");
    } else {
        echo "gagal";
    }
}
?>

<html>

<body>
    <form method="post">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" id="nama_kategori" name="nama_kategori" required>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>