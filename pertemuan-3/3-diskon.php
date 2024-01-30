<?php

$harga_nasi_goreng = 15000;
$harga_ayam_bakar = 20000;
$harga_nasi_kebuli = 25000;
$harga_jus = 8000;
$harga_es_teh_manis = 3000;
$harga_es_jeruk = 5000;

$jumlah_nasi_goreng = 2;
$jumlah_ayam_bakar = 1;
$jumlah_nasi_kebuli = 2;

$total_harga = ($jumlah_nasi_goreng * $harga_nasi_goreng) +
               ($jumlah_ayam_bakar * $harga_ayam_bakar) +
               ($jumlah_nasi_kebuli * $harga_nasi_kebuli);

$hari_ini = date("l"); 

if ($hari_ini == "Monday") { 
    $diskon = 0.02; 
} elseif ($hari_ini == "Friday") { 
    $diskon = 0.05; 
} else {
    $diskon = 0; 
}

$total_harga_setelah_diskon = $total_harga - ($total_harga * $diskon);

echo "hari ini: " . date("l") ;
echo "<br>";
echo "Total harga sebelum diskon: " . $total_harga ;
echo "<br>";
echo "Diskon yang diberikan: " . ($diskon * 100) ;
echo "<br>";
echo "Total harga setelah diskon: " . $total_harga_setelah_diskon ;
?>