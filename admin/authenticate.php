<?php
session_start();
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: login.php");
    exit;
}

// Memanggil koneksi database
include "../config/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin
          WHERE username='$username'
          AND password='$password'";

$result = mysqli_query($connection, $query);

// Mengecek apakah data ditemukan
if(mysqli_num_rows($result) == 1){

    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;

    header("Location: dashboard.php");
    exit;

}else{

    // Jika login gagal
    echo "<script>
            alert('Username atau Password salah!');
            window.location='login.php';
          </script>";

}
?>