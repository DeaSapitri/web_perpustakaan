<?php
include '../koneksi.php';

$query = "SELECT * FROM kategori_buku";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<th>id_kategori</th>";
    echo "<th>nama_kategori</th>";
    echo "<th>Aksi</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id_kategori"] . "</td>
        <td>" . $row["nama_kategori"] . "</td>
        <td>
        <a class='action-btn' href='edit_kategori.php?id_kategori=" . $row['id_kategori'] . "'>Edit</a>
        <a class='action-btn delete' href='hapus_kategori.php?id_kategori=" . $row['id_kategori'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "tidak ada data";
}
mysqli_close($conn);
?>