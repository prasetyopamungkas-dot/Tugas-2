<?php

include "config/database.php";

$id = $_POST['id'];
$nama = $_POST['nama_sneakers'];
$brand = $_POST['brand'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$warna = $_POST['warna'];

mysqli_query($conn, "UPDATE sneakers_0011 SET
nama_sneakers='$nama',
brand='$brand',
ukuran='$ukuran',
harga='$harga',
stok='$stok',
warna='$warna'
WHERE id='$id'");

header("location:index.php");

?>