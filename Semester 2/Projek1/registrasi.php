<?php
include_once('koneksi.php');

// Handle potential database connection issues or query failures gracefully
try {
    $unit_kerja = $dbh->query('SELECT * FROM `unit_kerja`');
    if (!$unit_kerja) throw new Exception("Failed to fetch unit_kerja.");

    $kelurahan = $dbh->query('SELECT * FROM `kelurahan`');
    if (!$kelurahan) throw new Exception("Failed to fetch kelurahan.");
} catch (Exception $e) {
    die("Database error: " . $e->getMessage()); // Proper error handling in production should not expose details.
}

include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4">
    <fieldset class="mx-5 border p-4 mt-5">
        <legend>Registrasi Paramedik</legend>
        <form method="POST" action="proses_registerasi.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Gender</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label>
                <div class="col-8">
                    <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
                        <option value="">Pilih Unit Kerja</option>
                        <?php foreach ($unit_kerja as $unit): ?>
                            <option value="<?= htmlspecialchars($unit['id']) ?>"><?= htmlspecialchars($unit['nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="telpon" class="col-4 col-form-label">Telpon</label>
                <div class="col-8">
                    <input id="telpon" name="telpon" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"></textarea>
            </div>
        </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>

<?php
include_once('bottom.php');
?>
