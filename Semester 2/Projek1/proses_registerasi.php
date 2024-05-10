    <?php
    include_once('koneksi.php');

    // tangkap data dari form
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $unit_kerja_id = $_POST['unit_kerja_id'];

    // buat query
    $query = "INSERT INTO paramedik (nama, gender, tgl_lahir, alamat, telpon, unit_kerja_id) VALUES ('$nama', '$gender', '$tgl_lahir', '$alamat', '$telpon', '$unit_kerja_id')";

    // eksekusi query
    if ($dbh->query($query)) {
        header('Location: Paramedik.php');
    } else {
        echo "Gagal menyimpan data";
    }
