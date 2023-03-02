<?php
    #Inisiasi dan inisialisasi variabel
    $a = 10;
    $b = 5 ;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d + $c;

    #Tampilkan data dengan perintah echo
    echo " Variabel a : {$a} <br>";
    echo " Variabel b : {$b} <br>";
    echo " Variabel c : {$c} <br>";
    echo " Variabel d : {$d} <br>";
    echo " Variabel e : {$e} <br>";

    #Mengetahui tipe data dari variabel
    var_dump($e);
?>