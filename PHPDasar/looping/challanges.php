<!-- 
Challange 1:
1. kumpulan array 2,4,2,8,10 +. Maka cari jumlahnya!
2. array 1,3,3,2,2,5,5,5,4,4. Hilanngkan duplikat angka lalu tampilkan tersortir dari kecil ke besar. 1,2,3,4,5
3. tampilkan jumlah huruf sebanyak jumlah indikator variabel. (bonus round)
    a => vicky,
    b => 4,
    hasil => vvviiiccckkkyyy
-->

<?php
// Nomor 1
$no1 = [2, 3, 2, 8, 10];
echo 'Jumlah Dari Nomor Tugas Array Nomor 1 : ' . array_sum($no1) . '<br><br>';

// Nomor 2
$no2 = [1, 3, 3, 2, 2, 5, 5, 5, 4, 4];
$n = array_unique($no2);
sort($n);
foreach ($n as $h) {
    echo 'Hasil dari sortir angka adalah : ' . $h . '<br><br>';
}

// Nomor 3
$a = 'vicky';
$b = 4;
$result = '';
for ($i = 0; $i < strlen($a); $i++) {
    $result .= str_repeat($a[$i], $b);
}
echo 'Hasil dari nomor 3 : ' . $result . '<br><br>';
?>