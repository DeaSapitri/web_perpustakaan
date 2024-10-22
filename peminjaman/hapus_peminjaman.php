<?php
include '../koneksi.php'; //koneksi database
//Cek jika ID mobil diterima dari URL
if (isset($_GET['id_peminjaman'])) {
    $id_peminjaman = $_GET['id_peminjaman'];
    //Query untuk menghapus data mobil
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
    if ($conn->query($sql) === TRUE) {
        header("Location: peminjaman.php"); // Redirect setelah
        exit;
    } else {
        echo "Gagal menghapus: " . $conn->error;
    }
}
?>
