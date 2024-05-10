<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

// Mendapatkan tanggal periksa saat ini
$tanggal_periksa = date('Y-m-d');

$query = "SELECT * FROM pasien";
$periksas = $dbh->query($query);

// Mendapatkan jumlah baris yang ada dalam tabel periksa
$count_rows = $periksas->rowCount();

// Inisialisasi nomor urut untuk id
$id = 1;
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Periksa</h3>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th> <!-- Mengubah judul kolom -->
            <th>BB</th>
            <th>TB</th>
            <th>Tensi</th>
            <th>Keterangan</th>
        </tr>
        <?php
        foreach ($periksas as $per) :
            // Mengisi berat badan secara acak antara 40 kg dan 100 kg
            $berat_badan = rand(40, 100);
            
            // Mengisi tinggi badan secara acak antara 140 cm dan 200 cm
            $tinggi_badan = rand(140, 200);
            
            // Mengisi tensi secara acak antara 90 dan 140
            $tensi = rand(90, 140);
            
            // Mengisi keterangan secara acak
            $keterangan = "Hasil pemeriksaan normal";
        ?>
        <tr>
            <td><?= $id++; ?></td>
            <td><?= $tanggal_periksa ?></td> <!-- Menggunakan tanggal periksa yang didapatkan sebelumnya -->
            <td><?= $berat_badan ?></td>
            <td><?= $tinggi_badan ?></td>
            <td><?= $tensi ?></td>
            <td><?= $keterangan ?></td>
            <td>
                <a href="pasien_delete.php?id=<?= $per['id'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>
