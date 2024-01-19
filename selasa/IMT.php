<?php

$berat = 44;
$tinggi = 1.48;
$meter_kuadrat = $tinggi * $tinggi;

$imt = $berat / $meter_kuadrat;

if ($imt >= 18.5 && $imt < 22.9) {
    $status = "normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    $status = "berat badan lebih";
} elseif ($imt >= 25) {
    $status = "obesitas";
}

echo "$status";

?>