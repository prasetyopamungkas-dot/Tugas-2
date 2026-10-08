<?php

include "config/database.php";

$nama = $_POST['nama_sneakers'];
$brand = $_POST['brand'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$warna = $_POST['warna'];

mysqli_query($conn, "INSERT INTO sneakers_0011
(nama_sneakers, brand, ukuran, harga, stok, warna)
VALUES ('$nama', '$brand', '$ukuran', '$harga', '$stok', '$warna')");

header("location:index.php");

?>