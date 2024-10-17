<?php
include '../koneksi.php';

$query = "SELECT * FROM buku";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<th>id_buku</th>";
    echo "<th>judul</th>";
    echo "<th>penulis</th>";
    echo "<th>penerbit</th>";
    echo "<th>tahun_terbit</th>";
    echo "<th>Aksi</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id_buku"] . "</td>
        <td>" . $row["judul"] . "</td>
        <td>" . $row["penulis"] . "</td>
        <td>" . $row["penerbit"] . "</td>
        <td>" . $row["tahun_terbit"] . "</td>
        <td>
        <a class='action-btn' href='edit_buku.php?id_buku=" . $row['id_buku'] . "'>Edit</a>
        <a class='action-btn delete' href='hapus_buku.php?id_buku=" . $row['id_buku'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "tidak ada data";
}
mysqli_close($conn);
?>