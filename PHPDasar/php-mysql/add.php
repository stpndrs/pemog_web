<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO tb_siswa (nisn, nama, kelas) VALUES ('$nisn', '$nama', '$kelas')";
    $insert = mysqli_query($connect, $query);

    if ($insert) {
        header('Location: index.php');
    } else {
        echo '<script>alert("Gagal menambahkan data")</script>';
        header('Location: add.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border: .5px solid black;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h4>Tambah Siswa</h4>
            <form action="" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><input type="number" class="text" id="nisn" name="nisn" required></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" class="text" id="nama" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><input type="text" class="text" id="kelas" name="kelas" required></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" name="simpan">Simpan</button>
                <button type="button"><a href="./index.php">Kembali</a></button>
            </form>
        </div>
    </div>
</body>

</html>