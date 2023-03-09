<!-- 1. Buatkan sebuah halaman yang dapat menentukan apakah sutatu nilai bisa dibagi 49. 
Contoh => 
nilai: 98 maka hasilnya 'Bisa' 
nilai: 75 maka hasilnya 'Tidak Bisa'-->
<?php
$nilai = 98;
if ($nilai % 49 == 0) {
    $hasil = 'Bisa';
} else {
    $hasil = 'Tidak Bisa';
}
// echo $hasil;
?>


<!-- 2. Buatkan sebuah halaman yang dapat menentukan di dalam 2 nilai terdapat angka 10 atau berjumlah 10. 
Contoh => nilai a: 10, nilai b: 8 maka hasilnya 'Ada'. 
nilai a: 8, nilai b: 2 maka hasilnya 'Ada'.
nilai a: 7, nilai b: 1 maka hasilnya 'Tidak Ada -->
<?php
$a = 2;
$b = 8;
if ($a == 10 || $b == 10 || $a + $b == 10) {
    $hasil = 'Ada';
} else {
    $hasil = 'Tidak Ada';
}
// echo "Hasil nomor 2 $hasil";
?>

<!-- 3. Buatkan sebuah halaman yang dapat menentukan berapa jumlah angka yang sama dalam 3 angka.
Contoh: nilai: 1,1,2 maka hasilnya 2
    nilai: 1,1,1 maka hasilnya 3
    nilai 1,2,3 maka hasilnya 0 -->
<?php
$num1 = 3;
$num2 = 3;
$num3 = 3;
$res = 0;

if ($num1 == $num2 && $num2 == $num3) {
    $res += 3;
} else if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
    $res += 2;
} else if ($num1 != $num2 && $num1 != $num3 && $num2 != $num3) {
    $res += 0;
}

echo 'Jumlah angka yang sama ', $res;
?>