<?php

$diskon = 7/100;
$belanjaAndi = 90000;

if ($belanjaAndi >=100000) {
    $hasil = $belanjaAndi * $diskon;
} else{
    $hasil = 0;
}

$hasilPromo = $belanjaAndi - $hasil;

echo "YG HARUS ANDI BAYAR ADALAH $hasilPromo";

?>