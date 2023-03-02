<?php
    $nilai=70;
    // JIKA $nilaiLEBIH KECIL DARI 60, MAKA $grade=D
    if ($nilai<60){
        $grade='D';
    }
    // JIKA $nilai LEBIH BESAR SAMA DENGAN 60 DAN $nilai LEBIH KECIL DARI 75, MAKA $grade=C
    elseif ($nilai>=60 && $nilai<75){
        $grade='C';
    }
    // JIKA $nilai LEBIH BESAR SAMA DENGAN 75 DAN $nilai LEBIH KECIL DARI 90, MAKA $grade=B
    elseif ($nilai>=75 && $nilai<90){
        $grade='B';
    }
    // SELAIN KONDISI DIATAS, MAKA $grade=A
    else{
        $grade='A';
    }
    echo 'Nilai UAS anda : '.$nilai.', Grade = '.$grade;
?>