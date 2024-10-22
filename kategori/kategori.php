<?php
include '../koneksi.php';

$query = "SELECT * FROM kategori_buku";

$result = mysqli_query($conn, $query);

?>

<html>

<head>
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #4b7da3;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #f2f2f2;
            display: block;
        }

        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        table {
            width: 100%;
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
<h1>Data Kategori</h1>
<a class="btn" href="../kategori/tambah_kategori.php">+ Tambah Kategori</a>
    <?php
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
</body>

</html>