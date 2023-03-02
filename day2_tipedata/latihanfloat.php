<?php
    $nilaiA=5.1;
    $nilaiB=6.7;
    $nilaiC=9.3;

    #hitung nilai rata-rata
    $rataRata=($nilaiA + $nilaiB + $nilaiC);

    #Tampilkan data
    echo "Nilai A: {$nilaiA} <br>";
    echo "Nilai B: {$nilaiB} <br>";
    echo "Nilai C: {$nilaiC} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    #lihat tipe data dari variabel $rataRata
    var_dump($rataRata);
?>