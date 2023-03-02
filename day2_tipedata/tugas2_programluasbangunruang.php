<!-- BUAT PROGRAM MENGHITUNG LUAS SEGITIGA, LUAS PERSEGI, LUAS LINGKARAN : INPUT LANGSUNG DI SOURCE CODE (TIPE DATA FLOAT) -->
<?php
    $alasSegitiga=8.2;
    $tinggiSegitiga=2.5;
    $luasSegitiga=($alasSegitiga*$tinggiSegitiga)/2;
    echo"PROGRAM LUAS SEGITIGA <br>";
    echo"<hr>";
    echo"Alas Segitiga= {$alasSegitiga} cm <br>";
    echo"Tinggi Segitiga= {$tinggiSegitiga} cm <br><br>";
    echo"Luas Segitiga= "."(Alas*Tinggi)/2 "."= ";
    echo"{$luasSegitiga} cm<br><br>";

    $sisiPersegi=5.4;
    $luasPersegi=$sisiPersegi*$sisiPersegi;
    echo"PROGRAM LUAS PERSEGI <br>";
    echo"<hr>";
    echo"Sisi Persegi= {$sisiPersegi} cm <br>";
    echo"Luas Persegi= "."(Sisi*Sisi) "."= ";
    echo"{$luasPersegi} cm<br><br>";

    $phiLingkaran=3.14;
    $jariLingkaran=14.0;
    $luasLingkaran=$phiLingkaran*$jariLingkaran*$jariLingkaran;
    echo"PROGRAM LUAS LINGKARAN <br>";
    echo"<hr>";
    echo"Phi Lingkaran= {$phiLingkaran} cm <br>";
    echo"Jari-Jari Lingkaran= {$jariLingkaran} cm <br>";
    echo"Luas Lingkaran= "."(phi*jari-jari*jari-jari) "."= ";
    echo"{$luasLingkaran} cm<br><br>";
?>