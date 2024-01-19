<!-- 3. dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 
13 meter dan lebar tahan 9 meter. tetapi sebelum membangun rumah, dan harus memberikan
laporan terlebih dahalu tipe rumah yg ingin dia buat kepada kontaktor bangunan. dengan luas tanah yg dia punya,
masuk ke kategori manakah rumah dani nantinya

tipe 36 : <90 m2
tipe 45 : 90 - 95 m2
tipe 54 : 96 - 120 m2
tipe 60 : 120 - 150 m2
tipe 70 : >150 m2 -->
 <?php

$panjang_tanah = 13;
$lebar_tanah = 9;   
$luas_tanah = $panjang_tanah * $lebar_tanah;

if ($luas_tanah < 90) {
    $tipe_rumah = "Tipe 36";
} elseif ($luas_tanah >= 90 && $luas_tanah <= 95) {
    $tipe_rumah = "Tipe 45";
} elseif ($luas_tanah >= 96 && $luas_tanah <= 120) {
    $tipe_rumah = "Tipe 54";
} elseif ($luas_tanah >= 121 && $luas_tanah <= 150) {
    $tipe_rumah = "Tipe 60";
} else {
    $tipe_rumah = "Tipe 70";
}

echo "$tipe_rumah";
?>
