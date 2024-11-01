<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: layout.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: layout.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login form in HTML and CSS</title>
    <link rel="stylesheet" href="style1.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="email" name="email" required />
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="Password" placeholder="Password" name="password" required />
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" /> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button name="submit" class="btn">Login</button>
            <a href="index.php">
                <div class="register-link">
                    <p>Don't have an account?<a href="register.php">Register</a></p>
                </div>
        </form>
    </div>
</body>

</html>