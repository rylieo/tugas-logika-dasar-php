<?php

function tampilkanHariTanggal($date) {
    $namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    $dayname = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $hari = $namaHari[date('w', strtotime($date))];
    $day = $dayname [date('w', strtotime($date))];
    $tanggal = date('d F Y', strtotime($date));
    echo $hari . ", " . $tanggal;
    echo "<br>";
    echo $day . ", ". $tanggal;
}

$date = '2024-01-29';
tampilkanHariTanggal($date);

?>