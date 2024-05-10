<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$size = $_POST['size'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

$query = "INSERT INTO brand_sepatu (nama, size, warna, harga)
          VALUES ('$nama', '$size', '$warna', '$harga') ";

if($koneksi->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();

?>