<?php
include '../koneksi.php';

$query = "SELECT peminjaman.id_peminjaman, user.nama_lengkap AS nama_user, buku.judul
 AS judul_buku, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status_peminjaman FROM peminjaman
 JOIN user ON peminjaman.id_user = user.id_user JOIN buku ON peminjaman.id_buku = buku.id_buku";

$result = mysqli_query($conn, $query);

?>
<html>

<head>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 15px;
            background-color: #b6895b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .action-btn {
            background-color: darkcyan;
            text-decoration: none;
            color: white;
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
        }

        .actioan-btn:delete {
            background-color: darkcyan;
            text-decoration: none;
            color: white;
            border: 1px solid blue;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<h1>Data Peminjaman</h1>
<a class="btn" href="../peminjaman/tambah_peminjaman.php">+ Tambah Data Peminjaman</a>
    <?php
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
        <td>" . $row["nama_user"] . "</td>
        <td>" . $row["judul_buku"] . "</td>
        <td>" . $row["tgl_peminjaman"] . "</td>
        <td>" . $row["tgl_pengembalian"] . "</td>
        <td>" . $row["status_peminjaman"] . "</td>
        <td> ";

        if ($row["status_peminjaman"] === 'Dipinjam'){
            echo "<a class='action-btn' ";
        }
        echo"
        <a class='action-btn' href='edit_peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>Edit</a>
        <a class='action-btn delete' href='hapus_peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
        </td>
        </tr>";
        }
        echo "</table>";
    } else {
        echo "tidak ada data";
    }
    mysqli_close($conn);
    ?>

<script>
        function confirmLogout(event) {
            event.preventDefault();
            var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
            if (confirmLogout) {
                window.location.href = event.target.href;
            }
        }
    </script>
</body>

</html>