<?php
include_once('koneksi.php');
$kelurahan = $dbh->query('SELECT * FROM kelurahan');

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Pasien</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="pasien_update.php" method="post">
        <input type="hidden" value="<?= $pasien['id'] ?>" name="id">
        <div class="form-group row">
            <label class="col-4 col-form-label" for="id">Id</label>
            <div class="col-8">
                <input id="id" name="id" type="text" class="form-control" value="<?= $pasien['nama'] ?>">
            </div>
        </div>
       
       
        <div class="form-group row">
            <label for="tanggal_periksa" class="col-4 col-form-label">Tanggal Periksa</label>
            <div class="col-8">
                <input id="tanggal_periksa" name="tanggal_periksa" type="date" class="form-control" value="<?= $pasien['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan</label>
            <div class="col-8">
                <input id="berat" name="berat" type="text" class="form-control" value="<?= $pasien['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
            <div class="col-8">
                <input id="tinggi" name="tinggi" type="text" class="form-control" value="<?= $pasien['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tensi" class="col-4 col-form-label">Tensi</label>
            <div class="col-8">
                <input id="tensi" name="tensi" type="text" class="form-control" value="<?= $pasien['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
            <div class="col-8">
                <textarea id="keterangan" name="keterangan" cols="40" rows="3" class="form-control"><?= $pasien['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>