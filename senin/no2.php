<!-- 2. tahun ini smk wikrama menjadi tuan rumah dari lomba programming nasional 
yg diikuti oleh siswa smp dan sma/smk/ma. setiap peserta yg mendaftar mendapatkan no peserta sesuai 
dengan ketentuan dan kategori mata lomba. terdapat 3 mata lomba dengan kodenya masing masing yaitu:
web app 01w
android 02a
game 03g

nomor peserta disusun dari 'urutan daftar ke - kategori mata lomba - tingkat pendidikan p untuk smp, 
a untuk sma/smk/ma - 2 digit terakhir tahun pelaksanaan (date('y'), substr)'

jika terdapat 121 peserta yg sudah daftar dan tuan rumah menunjuk eko sebagai perwakilan di mata lomba web app berapakah 
nomor peserta yg akan didapatkan eko -->

<?php

    $jumlah_peserta = 121;
    $mata_lomba = "web app";
    $pendidikan = "SMK"; 
    $tahunPelaksanaan = date('y');

    if($pendidikan == "smp"){
        $tingkat = "P";
    } else{
        $tingkat = "A";
    }
 
    if($mata_lomba == "web app"){
        $kategori = "01W";
    } elseif($mata_lomba == "android"){
        $kategori = "02A";
    }elseif($mata_lomba == "game"){
        $kategori = "03G";
    }
    echo "Nomor Peserta Eko = ". $eko = ($jumlah_peserta + 1) . $kategori . $tingkat . $tahunPelaksanaan;

?>