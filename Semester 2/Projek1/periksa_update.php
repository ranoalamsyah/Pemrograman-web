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
$query = "UPDATE pasien SET id='$id', tgl_lahir='$tgl_lahir', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan$keterangan='$keterangan' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}
