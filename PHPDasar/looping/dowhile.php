<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Do While PHP</title>
</head>

<body>
    <h2>Contoh penggunaan Do...While</h2>
    <?php
    $i = 1;
    do {
        echo "$i. Saya berjanji tidak akan nakal lagi. <br>";
        $i++;
    } while ($i <= 10);
    ?>
</body>

</html>