<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belum_kompeten = [];

foreach ($bilangan as $value) {
    if ($value >= 75) {
        $kompeten[] = $value;
    } else {
        $belum_kompeten[] = $value;
    }
}

echo "Kelompok Kompeten" . " ";
foreach ($kompeten as $value) {
    echo "<br>" . $value;
}
echo "<br>";
echo "<br>" . "Kelompok Belum Kompeten" . " ";
foreach ($belum_kompeten as $value) {
    echo "<br>" . $value;
}
