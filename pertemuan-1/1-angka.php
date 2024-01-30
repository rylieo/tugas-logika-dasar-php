<?php
$angka = "22";

if (is_numeric($angka) && !is_string($angka)) {

    echo "$angka merupakan bilangan";
} else {

    echo "$angka merupakan teks";
}
?>