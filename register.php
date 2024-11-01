<?php
include 'koneksi.php';
session_start();

if (isset(($_POST['submit']))){
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$nama_lengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];

$query_sql = "INSERT INTO user (username, password, email, nama_lengkap, alamat) 
VALUES ('$username','$password','$email','$nama_lengkap','$alamat')";

if (mysqli_query($conn, $query_sql)){
    header("Location: login.php");
} else{
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login form in HTML and CSS</title>
    <link rel="stylesheet" href="style2.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="username" required />
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="Password" placeholder="Password" name="password" required />
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="email" name="email" required />
                <i class='bi bi-envelope-at'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="nama_lengkap" name="nama_lengkap" required />
                <i class='bi bi-person-vcard'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="alamat" name="alamat" required />
                <i class='bi bi-house'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" /> Remember me</label>
                <a href="login.php">Login</a>
            </div>
            <button name="submit" class="btn">Regist</button>
            <a href="login.php">
        </form>
    </div>
</body>

</html>