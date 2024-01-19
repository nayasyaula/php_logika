<!-- berikanlah keterangan apakah $b = '' memiliki value atau tidak -->

<?php

$b = '';

if ($b == '' ) {
    $hasil = "tidak memiliki value";
} else {
    $hasil = "memiliki value";
}

echo "$hasil";

?>