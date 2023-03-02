<?php
    $nilai = 20;
    if(($nilai >= 85) && ($nilai <= 100)){
    $index = "A";
    } elseif($nilai >= 70) {
    $index = "B";
    } elseif($nilai >= 50) {
    $index = "C";
    } elseif($nilai >= 30){
    $index = "D";
    } else {
    $index = "E";
    }
    echo "Nilai anda adalah : ".$nilai;
    echo "<br />";
    echo "Dengan index      : ".$index;
?>