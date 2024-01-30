<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok_sama = array_intersect($bil1, $bil2);

$kelompok_berbeda_bil1 = array_diff($bil1, $kelompok_sama);
$kelompok_berbeda_bil2 = array_diff($bil2, $kelompok_sama);

echo "Kelompok Pertama (Bilangan yang sama): " . implode(', ', $kelompok_sama) . "<br>";
echo "Kelompok Kedua (Bilangan yang berbeda): " . implode(', ', array_merge($kelompok_berbeda_bil1, $kelompok_berbeda_bil2)) . "<br>";
?>