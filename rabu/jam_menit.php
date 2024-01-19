<?php

$jam = 15;
$menit = 40;

if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit < 30)) {
    $status = "waktu kerja";
} elseif (($jam == 11 && $menit >= 30) || ($jam == 12 && $menit < 15)) {
    $status = "waktu istirahat";
} elseif (($jam >= 12 && $jam < 16) || ($jam == 16 && $menit == 00)) {
    $status = "waktu kerja 2";
} else {
    $status = "bukan waktu kerja";
}

echo "$status";

?>