<!-- BUAT APLIKASI HITUNGAN PAKAI FORM LUAS SEGITIGA/PERSEGI/LINGKARAN BISA 1 PAGE/3 PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Bangun Ruang</title>
</head>
<body>
<form action="" method="post">
    Pilih Menu Hitung Luas:
    <br>
    <select name="Luas">
        <option value="" disabled selected>Pilih Luas</option>
        <option value="Segitiga">Luas Segitiga</option>
        <option value="Persegi">Luas Persegi</option>
        <option value="Lingkaran">Luas Lingkaran</option>
    </select>
    &nbsp;<input type="submit" name="pilihluas" value="Pilih">
</form>

<!-- PROGRAM INPUT BANGUN RUANG -->
<?php
echo'<hr>';
    if(isset($_POST['pilihluas'])){
        if(!empty($_POST['Luas'])) {
            $pilihan = $_POST['Luas'];
            switch($pilihan){
                case "Segitiga":
                    echo '<b>Program Luas ' . $pilihan.'</b>';
                    echo'
                    <form action="" method="post">
                        <br>
                        Masukkan Alas Segitiga :
                            &nbsp;<input type="number" name="alas" required> cm<br>
                            <br>
                        Masukkan Tinggi Segitiga :
                            &nbsp;<input type="number" name="tinggi" required> cm<br>
                        <input type="submit" name="hitungluassegitiga" value="Hitung">    
                    </form>
                    ';
                break;
                case "Persegi":
                    echo '<b>Program Luas ' . $pilihan.'</b>';
                    echo'
                    <form action="" method="post">
                        <br>
                        Masukkan Sisi Persegi :
                            &nbsp;<input type="number" name="sisi" required> cm<br>
                        <input type="submit" name="hitungluaspersegi" value="Hitung">    
                    </form>
                    ';
                break;
                case "Lingkaran":
                    echo '<b>Program Luas ' . $pilihan.'</b>';
                    echo'
                    <form action="" method="post">
                        <br>
                        Masukkan Jari-Jari Lingkaran :
                            &nbsp;<input type="number" name="jarijari" required> cm<br>
                        <input type="submit" name="hitungluaslingkaran" value="Hitung">    
                    </form>
                    ';
                break;
    
                default:
                    echo 'nothing';
            }
        } else {
            echo 'Silahkan pilih menu yang tersedia';
        }
    }
?>

<!-- OUTPUT HASIL INPUT LUAS BANGUN RUANG -->
<?php
    if(isset($_POST['hitungluassegitiga'])){
        if(!empty($_POST['hitungluassegitiga'])) {
            $alassegitiga = $_POST['alas'];
            $tinggisegitiga = $_POST['tinggi'];
            $luassegitiga=($alassegitiga * $tinggisegitiga)/2;
            echo '<u>Hasil Hitung Luas Segitiga:</u> <br>';
            echo 'Alas Segitiga: '.$alassegitiga.' cm<br>';
            echo 'Tinggi Segitiga: '.$tinggisegitiga.' cm<br><br>';
            echo 'Luas Segitiga<br>= (Alas x Tinggi) / 2<br>';
            echo '= ('.$alassegitiga.' x '.$tinggisegitiga.') / 2';
            echo '<br>= '.$luassegitiga.' cm';
        }
    }
    elseif(isset($_POST['hitungluaspersegi'])){
        if(!empty($_POST['hitungluaspersegi'])) {
            $sisipersegi = $_POST['sisi'];
            $luaspersegi=$sisipersegi * $sisipersegi;
            echo '<u>Hasil Hitung Luas Persegi:</u> <br>';
            echo 'Sisi Persegi: '.$sisipersegi.' cm<br><br>';
            echo 'Luas Persegi<br>= Sisi x Sisi<br>';
            echo '= '.$sisipersegi.' x '.$sisipersegi;
            echo '<br>= '.$luaspersegi.' cm';
        }
    }
    elseif(isset($_POST['hitungluaslingkaran'])){
        if(!empty($_POST['hitungluaslingkaran'])) {
            $jarilingkaran = $_POST['jarijari'];
            $luaslingkaran=3.14 * $jarilingkaran * $jarilingkaran;
            echo '<u>Hasil Hitung Luas Lingkaran:</u> <br>';
            echo 'Jari-Jari Lingkaran: '.$jarilingkaran.' cm<br><br>';
            echo 'Luas Lingkaran<br>= Phi x Jari-Jari x Jari-Jari<br>';
            echo '= 3.14 x '.$jarilingkaran.' x '.$jarilingkaran;
            echo '<br>= '.$luaslingkaran.' cm';
        }
    }
?>


</body>
</html>