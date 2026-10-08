<?php

include "config/database.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM sneakers_0011 WHERE id='$id'");
$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Sneakers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form">
    <h1>Edit Sneakers</h1>

    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <input type="text" name="nama_sneakers"
               value="<?= $d['nama_sneakers']; ?>">

        <input type="text" name="brand"
               value="<?= $d['brand']; ?>">

        <input type="number" name="ukuran"
               value="<?= $d['ukuran']; ?>">

        <input type="number" name="harga"
               value="<?= $d['harga']; ?>">

        <input type="number" name="stok"
               value="<?= $d['stok']; ?>">

        <input type="text" name="warna"
               value="<?= $d['warna']; ?>">

        <button type="submit">Update</button>

    </form>

    <a href="index.php">Kembali</a>
</div>

</body>
</html>