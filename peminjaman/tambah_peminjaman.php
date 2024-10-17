<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $status_peminjaman = $_POST['status_peminjaman'];

    $sql = "INSERT INTO peminjaman (id_user,id_buku,tgl_peminjaman,tgl_pengembalian) VALUES ('$id_user','$id_buku','$tgl_peminjaman','$tgl_pengembalian')";
    if (mysqli_query($conn, $sql)) {
        echo "data sukses ditambahkan";
        header("Location: peminjaman.php");
    } else {
        echo "gagal";
    }
}
?>

<html>

<body>
    <form method="post">
        <label for="id_user">User :</label>
        <select id="id_user" name="id_user" required>
            <?php
            include '../koneksi.php';
            $sql = "SELECT id_user, username FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id_user'] . '">' . $row['username'] . '</option>';
                }
            } else {
                echo '<option value="">Tidak ada jenis tersedia</option>';
            }
            $conn->close();
            ?>
        </select>
        </label>

        <label for="id_buku">Buku Pilihan :</label>
        <select id="id_buku" name="id_buku" required>
            <?php
            include '../koneksi.php';
            $sql = "SELECT id_buku, judul FROM buku";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id_buku'] . '">' . $row['judul'] . '</option>';
                }
            } else {
                echo '<option value="">Tidak ada jenis tersedia</option>';
            }
            $conn->close();
            ?>
        </select>
        </label>

        <label for="tgl_peminjaman">Tgl Peminjaman</label>
        <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" required>

        <label for="tgl_pengembalian">Tgl Pengembalian</label>
        <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" required>

        <label for="status_peminjaman">Status Peminjaman</label>
        <input type="text" id="status_peminjaman" name="status_peminjaman" required>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>