<?php 
$con = mysqli_connect('localhost', 'root', '', 'db_portal_berita');

if (!$con) {
    echo 'Error koneksi db :' . mysqli_error($con);
}

?>