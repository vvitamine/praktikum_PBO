<?php

echo "<h2> Deret Fibonacci (10 suku)</h2>";

$angka_sekarang = 0;
$angka_selanjutnya = 1;

for ($i = 0; $i < 10; $i++) {
    echo $angka_sekarang . " ";
    $angka_baru = $angka_sekarang + $angka_selanjutnya;

    $angka_sekarang = $angka_selanjutnya;
    $angka_selanjutnya = $angka_baru;
}

?>