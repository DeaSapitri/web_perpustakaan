<?php
include '../koneksi.php'; //Menghubungkan ke database
//mengecek apakah ID mobil diterima dari URL
if (isset($_GET['id_peminjaman'])) {
    $id_peminjaman = $_GET['id_peminjaman']; //mengambil IDmobil dari URL

    //mengambil data mobil berdasarkan ID dari database
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
    $result = $conn->query($sql);
    $peminjaman = $result->fetch_assoc();


    //mengecek apakah form telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //mengambil data yang diinputkan pengguna dari form
        $id_user = $_POST['id_user'];
        $id_buku = $_POST['id_buku'];
        $tgl_peminjaman = $_POST['tgl_peminjaman'];
        $tgl_pengembalian = $_POST['tgl_pengembalian'];
        $status_peminjaman = $_POST['status_peminjaman'];

        //mengupdate data mobil dari database berdasarkan input dari form
        $sql = "UPDATE peminjaman SET
        id_user='$id_user',
        id_buku='$id_buku',
        tgl_peminjaman='$tgl_peminjaman',
        tgl_pengembalian='$tgl_pengembalian',
        status_peminjaman='$status_peminjaman',
        id_peminjaman='$id_peminjaman'
        WHERE id_peminjaman=$id_peminjaman";

        //mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: peminjaman.php");
            exit;
        } else {
            //menampilkan pesan error jika gagal
            echo "Error updating record:" . $conn->error;
        }
    }
}
?>

<html>
    <head>
        <body>
        <h2>Edit Data Peminjaman</h2>
        <form method="POST">
            <!--menampilkan form dengan data mobil-->
            User: <input type="text" name="id_user" value="<?php echo $peminjaman['id_user']; ?>"><br>
            Buku Pilihan: <input type="text" name="id_buku" value="<?php echo $peminjaman['id_buku']; ?>"><br>
            Tgl Peminjaman: <input type="date" name="tgl_peminjaman" value="<?php echo $peminjaman['tgl_peminjaman']; ?>"><br>
            Tgl Pengembalian: <input type="date" name="tgl_pengembalian" value="<?php echo $peminjaman['tgl_pengembalian']; ?>"><br>
            Status Peminjaman: <input type="text" name="status_peminjaman" value="<?php echo $peminjaman['status_peminjaman']; ?>"><br>

            <!--tombol untuk perubahan-->
            <input type="submit" value="Simpan Perubahan">
        </form>
        </body>
    </head>
</html>