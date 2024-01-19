<?php
 
$nilaiAndi = 83;

if ($nilaiAndi < 78) {
    $hasil = "nilai andi tidak kompeten";
} elseif ($nilaiAndi >= 78 && $nilaiAndi <= 100) {
    $hasil = "nilai andi kompeten";
}

echo "$hasil";

?>