<?php
    $namaDepan = "Ibnu"; # pakai tanda petik dua
    $namaBelakang = 'Jakarta'; # pakai tanda petik satu

    # Menggabungkan dua variabel dengan tanda
    # Petik Dua
    $namaLengkap = "{$namaDepan} {$namaBelakang}";

    # Anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
    $namaLengkap2 = $namaDepan.''.$namaBelakang;

    # {Tampilkan Data}
    # Kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
    echo 'Nama Depan: ' .$namaDepan. '<br>';

    # Ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel
    # Di dalam string, akan tetapi menggabungkannya dengan operator titik (.)
    echo 'Nama Belakang: ' .$namaBelakang. '<br>';
    
    echo $namaLengkap;
?>
