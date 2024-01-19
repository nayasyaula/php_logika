<?php

$bilangan = 90;
$jumlah = 0;

for ($kelipatan = 3; $kelipatan <= 30; $kelipatan += 3) {
    if ($bilangan % $kelipatan == 0) {
        $jumlah++;
    }
}

echo "dapat dibagi habis dengan $jumlah cara";

?>