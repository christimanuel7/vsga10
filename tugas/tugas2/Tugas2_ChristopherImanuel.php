<?php
    echo '=========CETAK BILANGAN GANJIL GENAP 1-100=========<br>';
    #Looping bilangan diinisiasi awal $bilangan=1 hingga $bilangan=100 yang di nilai increment nya bernilai 1
    for ($bilangan = 1; $bilangan <= 100; $bilangan++) {
        #Seleksi IF jika bilangan mod 2 sisa hasil bagi sama dengan 1 maka $bilangan adalah bilangan ganjil
        if ($bilangan % 2 == 1) {
            echo $bilangan.' adalah bilangan Ganjil<br>';
        }
        #Jika IF diatas tidak memenuhi syarat, dapat dipastikan bahwa $bilangan yang tidak memenuhi syarat adalah bilangan genap
        else{
            echo $bilangan.' adalah bilangan Genap<br>';
        }
    }
?>