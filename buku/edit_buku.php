<?php
include '../koneksi.php'; //Menghubungkan ke database
//mengecek apakah ID mobil diterima dari URL
if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku']; //mengambil IDmobil dari URL

    //mengambil data mobil berdasarkan ID dari database
    $sql = "SELECT * FROM buku WHERE id_buku = $id_buku";
    $result = $conn->query($sql);
    $buku = $result->fetch_assoc();


    //mengecek apakah form telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //mengambil data yang diinputkan pengguna dari form
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];

        //mengupdate data mobil dari database berdasarkan input dari form
        $sql = "UPDATE buku SET
        judul='$judul',
        penulis='$penulis',
        penerbit='$penerbit',
        tahun_terbit='$tahun_terbit',
        id_buku='$id_buku'
        WHERE id_buku=$id_buku";

        //mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: buku.php");
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
        <h2>Edit Data Buku</h2>
        <form method="POST">
            <!--menampilkan form dengan data mobil-->
            Judul Buku: <input type="text" name="judul" value="<?php echo $buku['judul']; ?>"><br>
            Penulis: <input type="text" name="penulis" value="<?php echo $buku['penulis']; ?>"><br>
            penerbit: <input type="text" name="penerbit" value="<?php echo $buku['penerbit']; ?>"><br>
            Tahun Terbit: <input type="text" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>"><br>

            <!--tombol untuk perubahan-->
            <input type="submit" value="Simpan Perubahan">
        </form>
        </body>
    </head>
</html>