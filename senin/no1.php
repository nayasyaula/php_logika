<!-- 1. usia andi saat ini adalah 16 tahun, 
sedangkan usia bani 3 tahun lebih tua dibandingkan dani yang tahun 
kelahirannya sama dengan andi, lalu usia eko adalah 1 lustrum sebelum usia beni. antara andi 
dan eko siapakah yg lahir di tahun kebisat. tampilkan tahun kelahiran tiap tiap orang-->

<?php
	$usiaAndi = 16;
	$usiaDani = $usiaAndi;
	$usiaBeni = $usiaAndi + 3;
	$usiaEko = $usiaBeni - 5;
	$thn_skrng = 2024;

	$thn_andi = $thn_skrng - $usiaAndi;
	
	$thn_dani = $thn_skrng - $usiaDani;
	
	$thn_beni = $thn_skrng - $usiaBeni;

	$thn_eko = $thn_skrng - $usiaEko;

	echo "Tahun Kelahiran Andi: $thn_andi";
	echo "Tahun Kelahiran Dani: $thn_dani";
	echo "Tahun Kelahiran Beni: $thn_beni";
	echo "Tahun Kelahiran Eko: $thn_eko";

	if ($thn_andi % 100 == 0) {
	echo "Andi lahir di tahun kebisatan.";
	} else {
	echo "Eko lahir di tahun kebisatan.";
	};

?>