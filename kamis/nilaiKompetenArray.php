<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$tidakKompeten = [];

foreach ($bilangan as $angka) {
    if ($angka >= 75) {
        $kompeten[] = $angka;
    } else {
        $tidakKompeten[] = $angka;
    }
}

echo "Kompeten = " . implode(', ', $kompeten);
echo "Tidak Kompeten = " . implode(', ', $tidakKompeten);

?>
