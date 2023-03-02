<?php
        // Tangkap variabel dari form
        $vtangka = $_POST["tangka"];

        //Tampilkan datanya
        echo "Input Angka      : $vtangka <br>";


        if ($vtangka > 0)
        echo "Bilangan Positif";
        elseif ($vtangka == 0)
        echo "sama dengan nol";
        else
        echo "Bilangan Negatif";
?>