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
                    <form action="tugas4proses_christopherimanuel.php" method="post">
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
                    <form action="tugas4proses_christopherimanuel.php" method="post">
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
                    <form action="tugas4proses_christopherimanuel.php" method="post">
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

</body>
</html>