<?php
function hasDuplicateLetter($string) {
    $string = strtolower($string);
    
    $letters = count_chars($string, 1);

    foreach ($letters as $letter => $count) {
        if ($count > 1) {
            return true;
        }
    }
    return false;
}

// contoh penggunaan
$string1 = "vicky";
$string2 = "pplg";
if (hasDuplicateLetter($string1)) {
    echo 'true';
} else {
    echo 'false';
}
echo "<br>";
if (hasDuplicateLetter($string2)) {
    echo 'true';
} else {
    echo 'false';
}
