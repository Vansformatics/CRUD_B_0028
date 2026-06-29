<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Koneksi database
include "../config/database.php";

$query = "SELECT * FROM menu";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">

        <h2>Kelola Menu</h2>
        <a href="dashboard.php" class="btn btn-secondary mb-3">Kembali</a>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Menu</a>

        <table class="table table-bordered table-striped">

            <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>

            <?php
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_menu']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td>Rp <?php echo number_format($row['harga']); ?></td>
                <td><img src="../uploads/<?php echo $row['gambar']; ?>" width="80">
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"
                        class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Yakin ingin menghapus menu ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

</body>

</html>