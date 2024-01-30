<?php
$array = array (1, 2, 3, 4, 5, 6);
print_r ($array);
echo"<br>";
for ($i = 0; $i < count ($array); $i++) {
    echo $array [0];
}
echo "<br>";
foreach ($array as $key => $value) {
echo $key;
}


// array 2 dimensi melibatkan penggunaan 2 indeks


?>