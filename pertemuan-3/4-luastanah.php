<?php

$panjangTanah = 13;
$lebarTanah = 9;

$luasTanah = $panjangTanah * $lebarTanah;

if ($luasTanah < 90) {
    $tipeRumah = "36";
} elseif ($luasTanah >= 90 && $luasTanah < 96) {
    $tipeRumah = "45";
} elseif ($luasTanah >= 96 && $luasTanah < 120) {
    $tipeRumah = "54";
} elseif ($luasTanah >= 120 && $luasTanah < 150) {
    $tipeRumah = "60";
} else {
    $tipeRumah = "70";
}

echo "Luas tanah yang dimiliki Dani adalah $luasTanah meter";
echo "<br>";
echo"sehingga dapat membangun rumah dengan tipe $tipeRumah";
?>