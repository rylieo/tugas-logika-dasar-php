<?php

function aduPanjang($nama1, $nama2)
{
    $panjang_nama1 = strlen($nama1);
    $panjang_nama2 = strlen($nama2);

    if ($panjang_nama1 > $panjang_nama2) {
        $nama_lebih_panjang = $nama1;
        $selisih_panjang = $panjang_nama1 - $panjang_nama2;

    } elseif ($panjang_nama2 > $panjang_nama1) {
        $nama_lebih_panjang = $nama2;
        $selisih_panjang = $panjang_nama2 - $panjang_nama1;

    } else {
        $nama_lebih_panjang = "Kedua nama memiliki jumlah karakter yang sama";
        $selisih_panjang = 0;
    }

    echo "Jumlah karakter nama pertama ('$nama1'): $panjang_nama1 <br>";
    echo "Jumlah karakter nama kedua ('$nama2'): $panjang_nama2 <br>";
    echo "Nama dengan jumlah karakter lebih banyak: '$nama_lebih_panjang' <br>";
    echo "Selisih jumlah karakter: $selisih_panjang <br>";
}

aduPanjang("jajat sudrajat", "hendi suhendi");