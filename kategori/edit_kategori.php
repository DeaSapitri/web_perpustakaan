<?php
include '../koneksi.php'; //Menghubungkan ke database
//mengecek apakah ID mobil diterima dari URL
if (isset($_GET['id_kategori'])) {
    $id_kategori = $_GET['id_kategori']; //mengambil IDmobil dari URL

    //mengambil data mobil berdasarkan ID dari database
    $sql = "SELECT * FROM kategori_buku WHERE id_kategori = $id_kategori";
    $result = $conn->query($sql);
    $kategori_buku = $result->fetch_assoc();


    //mengecek apakah form telah dikirim
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //mengambil data yang diinputkan pengguna dari form
        $nama_kategori = $_POST['nama_kategori'];

        //mengupdate data mobil dari database berdasarkan input dari form
        $sql = "UPDATE kategori_buku SET
        nama_kategori='$nama_kategori',
        id_kategori='$id_kategori'
        WHERE id_kategori=$id_kategori";

        //mengecek apakah proses update berhasil
        if ($conn->query($sql) === TRUE) {
            header("Location: kategori.php");
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
        <h2>Edit Kategori</h2>
        <form method="POST">
            <!--menampilkan form dengan data mobil-->
            Nama Kategori: <input type="text" name="nama_kategori" value="<?php echo $kategori_buku['nama_kategori']; ?>"><br>

            <!--tombol untuk perubahan-->
            <input type="submit" value="Simpan Perubahan">
        </form>
        </body>
    </head>
</html>