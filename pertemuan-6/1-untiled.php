<?php
function createArray(...$jurusan){
    $hasil = "";
    $len = count($jurusan);
        $jurusan = array_map ('strtoupper',$jurusan);
        $unik = array_unique($jurusan);
        foreach($unik as $p){
        $hasil .= "$p \n";
        }
  echo $hasil;
}

createArray("PPLG","HTL","KLN","PMN","pplg","htl");
?>