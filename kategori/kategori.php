<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            color: #333;
            padding: 0.8rem 1rem;
            border-radius: 0.3rem;
            margin: 0.2rem 0;
        }

        .sidebar .nav-link:hover {
            background-color: #f8f9fa;
        }

        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        .main-content {
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .top-navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar bg-white p-3">
                <div class="text-center mb-4">
                    <h4>Admin Panel</h4>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.php">
                        <i class="bi bi-collection"></i> Dashboard
                    </a>
                    <a class="nav-link" href="../buku/buku.php">
                        <i class="bi bi-book"></i> Data Buku
                    </a>
                    <a class="nav-link active" href="kategori/kategori.php">
                        <i class="bi bi-bookmarks"></i> Kategori
                    </a>
                    <a class="nav-link" href="../peminjaman/peminjaman.php">
                        <i class="bi bi-journal-bookmark-fill"></i> Peminjaman
                    </a>
                    <a class="nav-link" href="laporan.php">
                        <i class="bi bi-file-earmark-text"></i> Laporan
                    </a>
                    <a class="nav-link" href="pengaturan.php">
                        <i class="bi bi-gear"></i> Pengaturan
                    </a>
                    <a class="nav-link text-danger" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-0">
                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 top-navbar">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-person-circle"></i> Admin
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                        <li><a class="dropdown-item" href="pengaturan.php">Pengaturan</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Page Content -->
                <div class="main-content">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                    <!-- Dashboard Cards -->
                    

                    <!-- Content Area -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Kategori</h5>
                        </div>
                        <div class="card-body">
                            <!-- Your main content goes here -->
                            <a button type="button" class="btn btn-secondary" href="tambah_kategori.php">+ Tambah Kategori</button></a><br><br>
                            <?php
                            include '../koneksi.php';

                            $query = "SELECT * FROM kategori_buku";

                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<table border ='1' class='table table-primary'>";
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
                                    <a class='btn btn-info' href='edit_kategori.php?id_kategori=" . $row['id_kategori'] . "'>Edit</a>
                                    <a class='btn btn-secondary' href='hapus_kategori.php?id_kategori=" . $row['id_kategori'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
                                    </td>
                                    </tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "tidak ada data";
                            }
                            mysqli_close($conn);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>