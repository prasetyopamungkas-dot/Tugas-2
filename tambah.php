<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sneakers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form">
    <h1>Tambah Sneakers</h1>

    <form action="simpan.php" method="POST">

        <input type="text" name="nama_sneakers" placeholder="Nama Sneakers" required>

        <input type="text" name="brand" placeholder="Brand" required>

        <input type="number" name="ukuran" placeholder="Ukuran" required>

        <input type="number" name="harga" placeholder="Harga" required>

        <input type="number" name="stok" placeholder="Stok" required>

        <input type="text" name="warna" placeholder="Warna" required>

        <button type="submit">Simpan</button>

    </form>

    <a href="index.php">Kembali</a>
</div>

</body>
</html>