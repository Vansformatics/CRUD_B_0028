<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "../config/database.php";

$id = $_GET['id'];

$query = "SELECT * FROM menu WHERE id='$id'";
$result = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $nama = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // Cek apakah upload gambar baru
    if($_FILES['gambar']['name'] != ""){
        $gambar = time() . "_" . $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp, "../uploads/" . $gambar);

    }else{
        $gambar = $data['gambar'];

    }

    $update = "UPDATE menu SET
                nama_menu='$nama',
                deskripsi='$deskripsi',
                harga='$harga',
                gambar='$gambar'
                WHERE id='$id'";

    mysqli_query($connection, $update);

    header("Location: menu.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <h2>Edit Menu</h2>

        <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Nama Menu</label>
            <input type="text" name="nama_menu" class="form-control" value="<?php echo $data['nama_menu']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required><?php echo $data['deskripsi']; ?></textarea>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label>
            <br>
            <img src="../uploads/<?php echo $data['gambar']; ?>" width="120">
        </div>

        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <a href="menu.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>

</body>
</html>