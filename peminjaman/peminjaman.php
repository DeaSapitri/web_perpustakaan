<?php
include '../koneksi.php';

$query = "SELECT * FROM peminjaman";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<th>ID Peminjaman</th>";
    echo "<th>ID User</th>";
    echo "<th>ID Buku</th>";
    echo "<th>Tgl Peminjaman</th>";
    echo "<th>Tgl Pengembalian</th>";
    echo "<th>Status Peminjaman</th>";
    echo "<th>Aksi</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id_peminjaman"] . "</td>
        <td>" . $row["id_user"] . "</td>
        <td>" . $row["id_buku"] . "</td>
        <td>" . $row["tgl_peminjaman"] . "</td>
        <td>" . $row["tgl_pengembalian"] . "</td>
        <td>" . $row["status_peminjaman"] . "</td>
        <td>
        <a class='action-btn' href='edit_peminjaman.php?id_peminjaman="  . $row['id_peminjaman'] . "'>Edit</a>
        <a class='action-btn delete' href='hapus_peminjaman.php?id_peminjaman=" . $row['id_peminjaman']  . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "tidak ada data";
}
mysqli_close($conn);
?>
