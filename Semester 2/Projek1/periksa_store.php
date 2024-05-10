<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$tanggal_periksa = $_POST['tanggal_periksa'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan$keterangan'];


// buat query
$query = "INSERT INTO pasien (id, tanggal_periksa , berat, tinggi, tensi, keterangan) VALUES ('$id', '$tanggal_periksa', '$berat', '$tinggi', '$tensi', '$alamat', '$keterangan')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}
