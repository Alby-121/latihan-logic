<?php
echo "Masukkan sebuah angka: ";
fscanf(STDIN, "%d", $n);

for ($i = 2; $i <= $n; $i++) {
    $prima = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prima = false;
        }
    }

    if ($prima) {
        echo $i . " ";
    }
}
?>