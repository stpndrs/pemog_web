<?php 
$names = ['Abdul', 'Budi', 'Chandra', 'Dulah', 'Edi'];
for ($i=0; $i < count($names); $i++) { 
    echo "Nama saya " . $names[$i] . "<br>";
}

foreach ($names as $key => $value) {
    echo "Nama saya adalah $value <br>";
}
?>