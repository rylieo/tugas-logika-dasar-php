<?php
$nama_siswa = ["Andi", "Budi", "Cindy"];
$nilai_siswa = [81.2, 75.5, 90.0];

$jumlah_siswa = count($nama_siswa);

$total_nilai = array_sum($nilai_siswa);

$rata_rata = $total_nilai / $jumlah_siswa;

for ($i = 0; $i < $jumlah_siswa; $i++) {
    echo "{$nama_siswa[$i]}  {$nilai_siswa[$i]}\n" . "<br>";
}

echo "Rata-rata: $rata_rata" . substr(0, 7);
?>
