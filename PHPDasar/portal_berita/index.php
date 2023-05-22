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
            <div class="panel-title">Data Berita</div>
        </div>
        <div class="panel-body">
            <a href="tambah.php" class="btn btn-primary btn-xs">Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1</td>
                        <td>Tes</td>
                        <td>Tes</td>
                        <td>Tes</td>
                        <td>Tes</td>
                        <td>Tes</td>
                        <td>Tes</td>
                        <td>
                            <a href="#" class="btn btn-default btn-xs">Edit</a>
                            <a href="#" class="btn btn-default btn-xs">Hapus</a>
                        </td>
                    </tr> -->
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $query = mysqli_query($con, 'SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.kategori_id=tb_kategori.id_kategori');
                    while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['judul']; ?></td>
                        <td><?= $data['isi']; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td><img src="img/<?= $data['gambar']; ?>" alt="Gambar Berita" style="width: 100%;"></td>
                        <td><?= $data['penulis']; ?></td>
                        <td><?= $data['nama_kategori']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id_berita']; ?>" class="btn btn-default btn-xs">Edit</a>
                            <a href="delete.php?id=<?= $data['id_berita']; ?>" class="btn btn-default btn-xs" onclick="return confirm('Ingin menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>