<?php
include 'koneksi.php';

$id = $_GET['id'];
$find = mysqli_query($con, "SELECT * FROM tb_berita WHERE id_berita = $id");
$old = mysqli_fetch_array($find);
// var_dump($old);
// die;

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    // $gambar = $_POST['gambar'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];

    // if ($_FILES['gambar']) {
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    // if (file_exists($lokasi_gambar)) {
    if ($_FILES['gambar']) {
        move_uploaded_file($lokasi_gambar, 'img/' . $nama_gambar);
        unlink('img/' . $_POST['gambarOld']);
    } else {
        $nama_gambar = $_POST['gambarOld'];
    }

    $query = mysqli_query($con, "UPDATE tb_berita SET judul='$judul', isi='$isi', tanggal='$tanggal', gambar='$nama_gambar', penulis='$penulis', kategori_id='$kategori' WHERE id_berita = $id");
    // die;
    // $save = mysqli_query($con, $query);
    if ($query) {
        header('Location: index.php');
    } else {
        echo '<script>alert("Gagal menyimpan data")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Portal Berita</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Tambah Data Berita</div>
            </div>
            <div class="panel-body">
                <a href="index.php" class="btn btn-default btn-xs">Kembali</a>
                <br>
                <br>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?= $old['judul']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"><?= $old['isi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $old['tanggal']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Thumbnail</label>
                        <input type="hidden" name="gambarOld" value="<?= $old['gambar']; ?>">
                        <input type="file" class="form-control" name="gambar">
                        <img src="img/<?= $old['gambar']; ?>" alt="Gambar Lama" class="img-thumbnail" style="width: 50%;">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="<?= $old['penulis']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php
                            $query = mysqli_query($con, 'SELECT * FROM tb_kategori');
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $data['id_kategori']; ?>" <?= $data['id_kategori'] === $old['kategori_id'] ? 'selected' : '' ?>><?= $data['nama_kategori']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-xs" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>