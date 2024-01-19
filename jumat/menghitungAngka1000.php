<?php

function cekPembagian($angka)
{
    $hasil = array();

    if ($angka % 3 == 0) {
        $hasil[] = 3;
    }

    if ($angka % 5 == 0) {
        $hasil[] = 5;
    }

    if ($angka % 7 == 0) {
        $hasil[] = 7;
    }

    if ($angka % 10 == 0) {
        $hasil[] = 10;
    }

    return $hasil;
}

function cetakHasil($pembagian)
{
    if (empty($pembagian)) {
        echo "Angka tidak bisa dibagi oleh 3, 5, 7, atau 10.";
    } else {
        echo "Angka bisa dibagi dengan angka ";
        if (count($pembagian) == 1) {
            echo $pembagian[0] . " saja.";
        } else {
            echo implode(" dan ", $pembagian) . ".";
        }
    }
}

$angka = 1000;
$pembagian = cekPembagian($angka);

cetakHasil($pembagian);

?>