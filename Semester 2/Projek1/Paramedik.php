<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT p.*, u.nama as unit_kerja_nama 
          FROM paramedik p
          LEFT JOIN unit_kerja u ON p.unit_kerja_id = u.id";
$paramedik = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Paramedik</h3>
    </div>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($paramedik as $row) : ?>
            <tr>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
                <td><?= htmlspecialchars($row['tgl_lahir']) ?></td>
                <td><?= htmlspecialchars($row['telpon']) ?></td>
                <td><?= htmlspecialchars($row['alamat']) ?></td>
                <td><?= htmlspecialchars($row['unit_kerja_nama']) ?></td>
                <td>
                    <a href="pr_delete.php?id=<?= urlencode($row['id']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once('bottom.php'); ?>
