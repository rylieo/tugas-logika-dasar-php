<?php

// masukin kata "wikrama" ke dalam variabel yang namanya $nama
$nama = "wikrama";

// pakai fungsi substr buat ngeambil huruf paling belakang dari kata itu
// Angka -1 di parameter kedua nunjukin posisi dari ujung akhir string
$hurufakhir = substr($nama, -1);

// Terus gue tampilin hasilnya
echo "Eh, huruf terakhir dari kata itu tuh $hurufakhir ya.";

?>
