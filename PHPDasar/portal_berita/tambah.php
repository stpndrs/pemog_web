<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    // $gambar = $_POST['gambar'];
    // $gambar = $_FILES['gambar'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    if (file_exists($lokasi_gambar)) {
        move_uploaded_file($lokasi_gambar, 'img/' . $nama_gambar);
    }

    $query = mysqli_query($con, "INSERT INTO tb_berita (judul, isi, tanggal, gambar, penulis, kategori_id) VALUES (
        '$judul',
        '$isi',
        '$tanggal',
        '$nama_gambar',
        '$penulis',
        '$kategori'
        )");
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
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Thumbnail</label>
                        <!-- <input type="text" class="form-control" name="gambar"> -->
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php
                            $query = mysqli_query($con, 'SELECT * FROM tb_kategori');
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <option value="<?= $data['id_kategori']; ?>"><?= $data['nama_kategori']; ?></option>
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