<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['username'])|| $_SESSION['username'] === '') {
        // redirect ke dashboard
        header("Location: http://localhost/database/dashboard.php");
        exit();
    }
    ?>
    <h1>Menu</h1>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</body>
</html>