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

if(file_exists("../uploads/" . $data['gambar'])){
    unlink("../uploads/" . $data['gambar']);
}

$hapus = "DELETE FROM menu WHERE id='$id'";

mysqli_query($connection, $hapus);

header("Location: menu.php");
exit;
?>