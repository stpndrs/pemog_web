<?php 
include 'koneksi.php';

$id = $_GET['id'];
$findGambar = mysqli_fetch_array(mysqli_query($con, "SELECT gambar FROM tb_berita WHERE id_berita = $id"));
$query = "DELETE from tb_berita WHERE id_berita = $id";
if ($findGambar['gambar']) {
    unlink('img/' . $findGambar['gambar']);
}
mysqli_query($con, $query);

if ($query) {
    header('Location: index.php');
}
?>