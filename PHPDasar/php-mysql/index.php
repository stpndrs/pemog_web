<?php
include 'koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM tb_siswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data siswa</title>
</head>

<body>
    <table border="1" width="50%" align="center">
        <thead>
            <tr>
                <td colspan="2" align="center">
                    <button><a href="add.php">Tambah Data</a></button>
                </td>
            </tr>
            <tr>
                <th>No</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['nisn'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['kelas'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>