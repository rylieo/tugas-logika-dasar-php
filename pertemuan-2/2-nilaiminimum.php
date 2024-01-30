<?php

// Variabel untuk menyimpan nilai masing-masing mata pelajaran
$nilaiMatematika = 87;
$nilaiBahasaInggris = 85;
$nilaiBahasaIndonesia = 87;

// Menghitung rata-rata nilai
$rataRataNilai = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndonesia) / 3;

// Nilai minimum yang dibutuhkan untuk lulus masing-masing mata pelajaran
$nilaiMinimumMatematika = 87;
$nilaiMinimumBahasaInggris = 85;
$nilaiMinimumBahasaIndonesia = 87;

// Nilai rata-rata minimum yang dibutuhkan
$rataRataMinimum = 85;

// Memeriksa apakah peserta memenuhi syarat untuk diterima
if (
    $nilaiMatematika >= $nilaiMinimumMatematika &&
    $nilaiBahasaInggris >= $nilaiMinimumBahasaInggris &&
    $nilaiBahasaIndonesia >= $nilaiMinimumBahasaIndonesia &&
    $rataRataNilai >= $rataRataMinimum
) {
    // Pesan jika peserta diterima
    echo "Wow, mantap banget! Gue lulus, nih!";
} else {
    // Pesan jika peserta tidak diterima
    echo "Ah, maaf deh, kayaknya gue belum dapet nilai cukup buat lulus.";
}

?>
