<?php
include '../koneksi.php'; //koneksi database
//Cek jika ID mobil diterima dari URL
if (isset($_GET['id_kategori'])) {
    $id_kategori = $_GET['id_kategori'];
    //Query untuk menghapus data mobil
    $sql = "DELETE FROM kategori_buku WHERE id_kategori = $id_kategori";
    if ($conn->query($sql) === TRUE) {
        header("Location: kategori.php"); // Redirect setelah
        exit;
    } else {
        echo "Gagal menghapus: " . $conn->error;
    }
}
?>