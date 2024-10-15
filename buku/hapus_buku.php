<?php
include '../koneksi.php'; //koneksi database
//Cek jika ID mobil diterima dari URL
if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];
    //Query untuk menghapus data mobil
    $sql = "DELETE FROM buku WHERE id_buku = $id_buku";
    if ($conn->query($sql) === TRUE) {
        header("Location: buku.php"); // Redirect setelah
        exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;
    }
}
?>