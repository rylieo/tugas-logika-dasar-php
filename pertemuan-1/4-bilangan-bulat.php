<?php
$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

if (is_float($hasil)) {

    $hasilBulat = round($hasil);
    echo "$angka1 : $angka2 = $hasilBulat";
} else {

    echo "$angka1 : $angka2 = $hasil";
}
?>