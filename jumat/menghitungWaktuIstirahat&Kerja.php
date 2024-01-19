<?php

function hitungWaktuKerja($jamKerja, $istirahatShalat, $istirahatMakan) {
    $totalIstirahat = $istirahatShalat + $istirahatMakan;

    $waktuKerja = $jamKerja - $totalIstirahat;

    return array(
        'waktuKerja' => $waktuKerja,
        'totalIstirahat' => $totalIstirahat,
    );
}

$jamKerjaPerHari = 8 * 60;

$istirahatShalat = 20;

$istirahatMakan = 30;

$hasil = hitungWaktuKerja($jamKerjaPerHari, $istirahatShalat, $istirahatMakan);

echo "Waktu kerja: " . $hasil['waktuKerja'] . " menit\n";
echo "Total waktu istirahat: " . $hasil['totalIstirahat'] . " menit\n";

?>