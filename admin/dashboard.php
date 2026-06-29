<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Dashboard Admin</h2>

        <div class="card shadow">

            <div class="card-body">
                <h4>Selamat Datang, <?php echo $_SESSION['username']; ?></h4>
                <p>Silakan pilih menu yang ingin dikelola.</p>
                <hr>
                <a href="menu.php" class="btn btn-success">Kelola Menu</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

</body>
</html>