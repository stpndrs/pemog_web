<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sekolah';

$connect = mysqli_connect($hostname, $username, $password, $database);

// if ($connect) {
//     echo 'Koneksi database berhasil';
// } else {

    // }
    if (!$connect) {
        echo 'Koneksi database gagal' . mysqli_error($connect);
    }
