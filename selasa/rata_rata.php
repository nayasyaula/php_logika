<?php

$Smtk = 87;
$Singgris = 87;
$Sindo = 85;

$rata_rata = 85;

$mtk = 87;
$inggris = 87;
$indo = 87;

$rataAndi = ($mtk + $inggris + $indo) / 3;

if ($rataAndi >= $rata_rata && $mtk >= $Smtk && $indo >= $Sindo && $inggris >= $Singgris) {
    $status = "diterima";
} else {
    $status = "tidak diterima";
}

echo "$status";


?>