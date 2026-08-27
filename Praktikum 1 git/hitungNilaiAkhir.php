<?php

function hitungNilaiAkhir($uts, $uas, $tugas) {
    $bobotUts = $uts * 0.30;   
    $bobotUas = $uas * 0.40;   
    $bobotTugas = $tugas * 0.30; 

    $totalNilai = $bobotUts + $bobotUas + $bobotTugas;

    return (float)$totalNilai;
}

$nilaiUts = 85;
$nilaiUas = 90;
$nilaiTugas = 80;

echo "<h2>Program Hitung Nilai Akhir</h2>";
echo "Nilai UTS: " . $nilaiUts . "<br>";
echo "Nilai UAS: " . $nilaiUas . "<br>";
echo "Nilai Tugas: " . $nilaiTugas . "<br><br>";
echo "<b>Total Nilai Akhir: " . hitungNilaiAkhir($nilaiUts, $nilaiUas, $nilaiTugas) . "</b>";

?>
