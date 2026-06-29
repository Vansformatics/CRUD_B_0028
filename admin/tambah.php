<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "../config/database.php";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../uploads/" . $gambar);

    // Simpan ke database
    $query = "INSERT INTO menu (nama_menu, deskripsi, harga, gambar)
            VALUES ('$nama','$deskripsi','$harga','$gambar')";

    mysqli_query($connection, $query);

    header("Location: menu.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2>Tambah Menu</h2>

        <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Nama Menu</label>
            <input type="text" name="nama_menu" class="form-control" required>

        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>

        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>

        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>

        </div>

        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>

        <a href="menu.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>
</html>