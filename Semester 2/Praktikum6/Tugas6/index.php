<?php

include 'koneksi.php';

// show data
$query = "SELECT * FROM brand_sepatu";
$result = $koneksi->query($query)

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Brand Sepatu</h2>
    <table border="1" style="width:50%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Size</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td> <?= $row ['id'] ?> </td>
            <td> <?= $row ['nama'] ?> </td>
            <td> <?= $row ['size'] ?> </td>
            <td> <?= $row ['warna'] ?> </td>
            <td> <?= $row ['harga'] ?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
    <h2>Tambah Brand Sepatu</h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="nama" required><br>
        Size: <input type="number" name="size" required><br>
        Warna: <input type="text" name="warna" required><br>
        Harga: <input type="number" name="harga" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>