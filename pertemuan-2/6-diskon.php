<?php
$totalPembelian = 130000;
$hariPembelian = date("l");
$diskon = 0;

if ($hariPembelian == "Tuesday") {
    $diskon += 0.05;
}
if ($totalPembelian > 100000) {
    $diskon += 0.07;
}
$totalPembayaran = $totalPembelian - ($totalPembelian * $diskon) ;

echo "Total Pembelian: Rp " . number_format($totalPembelian) ;
echo "<br>";
echo "Diskon: " . ($diskon * 100) . "%" ;
echo "<br>";
echo "Total Pembayaran setelah Diskon: Rp " . number_format($totalPembayaran) ;
?>