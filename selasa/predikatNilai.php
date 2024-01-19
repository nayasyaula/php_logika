<?php

$nilai = 90;

if ($nilai >=90 && $nilai <=100){
    $predikat = "Predikat A";
} elseif ($nilai >=75 && $nilai <90) {
    $predikat = "Predikat B";
} else {
    $predikat = "Predikat C";
}

echo "$predikat";

?>