<?php
include "config/database.php";

$data = mysqli_query($conn, "SELECT * FROM sneakers_0011");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Sneakers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Toko Sneakers</h1>
    <p class="deskripsi">Temukan sneakers favoritmu</p>

    <a href="tambah.php" class="tombol-tambah">+ Tambah Sneakers</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Brand</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Warna</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_sneakers']; ?></td>
            <td><?= $d['brand']; ?></td>
            <td><?= $d['ukuran']; ?></td>
            <td>Rp <?= number_format($d['harga'], 0, ',', '.'); ?></td>
            <td><?= $d['stok']; ?></td>
            <td><?= $d['warna']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?= $d['id']; ?>"
                   onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>

        <?php } ?>
    </table>
</div>

</body>
</html>