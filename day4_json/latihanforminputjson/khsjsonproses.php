<?php
    // Tangkap variabel dari form
    $vta = $_POST["ttugas"];
    $vtb = $_POST["tuts"];
    $vtc = $_POST["tuas"];
    $vtd = ($vta * 0.2) + ($vtb * 0.3) +($vtc * 0.5);

    if ($vtd >= 90)
    $grade="A";
    elseif ($vtd >= 80 )
    $grade="B";
    elseif ($vtd >= 60 )
    $grade="C";
    else
    $grade="D";

    // File json yang akan dibaca
    $file = "khs.json";

    // Mendapatkan file json
    $anggota = file_get_contents($file);

    // Mendecode anggota.json
    $data = json_decode($anggota, true);

    // Data array baru yang masuk ke .json
    $data[] = array (

    'tugas' => "$vta",
    'uts' => "$vtb",
    'uas' => "$vtc",
    'nilai' => "$vtd",
    'grade' => "$grade"


    );

    $konten = json_encode($data, JSON_PRETTY_PRINT);

    //menyimpan konten di file
    file_put_contents($file, $konten);

    //menampilkan data

    foreach ($data as $key => $value)
    {
    
        if ($value['nilai'] >= 90)
        echo "Anda Mendapatkan Nilai A<br>";
        elseif ($value['nilai'] >= 80 )
        echo "Anda Mendapatkan Nilai B<br>";
        elseif ($value['nilai'] >= 60 )
        echo "Anda Mendapatkan Nilai C<br>";
        else
        echo "Anda Mendapatkan Nilai D<br>";

        echo "Tugas :" .$value['tugas']. '<br>';
        echo "UTS :" .$value['uts']. '<br>';
        echo "UAS :" .$value['uas']. '<br>';
        echo "<br>Nilai :" .$value['nilai']. '<br>';


        echo"<hr>";

    }
?>