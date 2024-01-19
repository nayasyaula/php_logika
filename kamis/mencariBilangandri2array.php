<?php

$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

$bilSama = array_intersect($bil1,$bil2);
$bilSatu = array_diff($bil1, $bil2);
$bilDua = array_diff($bil2, $bil1);

$menggabungkan = array_merge($bilSatu, $bilDua);

print_r($bilSama);
print_r($menggabungkan);

?>