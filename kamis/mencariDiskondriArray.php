<?php

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
    ],
    [
        'nama' => 'Kampas Rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

$barangDenganDiskon = array_filter($barang, function ($item) {
    return isset($item['diskon']);
});

foreach ($barangDenganDiskon as $barang) {
    echo "Nama: " . $barang['nama'] . ", Diskon: " . $barang['diskon'] . "% ||";
}

?>
