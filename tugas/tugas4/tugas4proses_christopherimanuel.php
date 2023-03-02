<!-- OUTPUT HASIL INPUT LUAS BANGUN RUANG -->
<?php
    if(isset($_POST['hitungluassegitiga'])){
        if(!empty($_POST['hitungluassegitiga'])) {
            $alassegitiga = $_POST['alas'];
            $tinggisegitiga = $_POST['tinggi'];
            $luassegitiga=($alassegitiga * $tinggisegitiga)/2;
            
            // File json yang akan dibaca
            $file = "tugas4_christopherimanuelsegitiga.json";

            // Mendapatkan file json
            $anggota = file_get_contents($file);

            // Mendecode anggota.json
            $data1 = json_decode($anggota, true);

            // Data array baru yang masuk ke .json
            $data1[] = array (

                'bangunRuang' => "Segitiga",
                'alasSegitiga' => "$alassegitiga",
                'tinggiSegitiga' => "$tinggisegitiga",
                'luasSegitiga' => "$luassegitiga"

            );
            
            $konten = json_encode($data1, JSON_PRETTY_PRINT);

            //menyimpan konten di file
            file_put_contents($file, $konten);

            // Membaca data array menggunakan foreach
            echo '<u>Rekap Perhitungan Luas Segitiga</u><br><br>';
            foreach ($data1 as $d) {
                echo 'Hasil Hitung Luas Segitiga: <br>';
                echo 'Alas Segitiga: '.$d['alasSegitiga']. 'cm<br>';
                echo 'Tinggi Segitiga: '.$d['tinggiSegitiga']. 'cm<br>';
                echo 'Luas Segitiga<br>= (Alas x Tinggi) / 2<br>';
                echo '=( '.$d['alasSegitiga'].' x '.$d['tinggiSegitiga']. ' ) / 2<br>';
                echo '= '.$d['luasSegitiga'].' cm <br><br>';
                // echo 'Tinggi Segitiga: '.$tinggisegitiga.' cm<br><br>';
                // echo '= ('.$alassegitiga.' x '.$tinggisegitiga.') / 2';
                // echo '<br>= '.$luassegitiga.' cm';

                // echo $d['no']. "<br>";
                // echo $d['nama']. "<br>";
                // echo $d['alamat']. "<br><br>";
            }
        }
    }
    elseif(isset($_POST['hitungluaspersegi'])){
        if(!empty($_POST['hitungluaspersegi'])) {
            $sisipersegi = $_POST['sisi'];
            $luaspersegi=$sisipersegi * $sisipersegi;

            // File json yang akan dibaca
            $file = "tugas4_christopherimanuelpersegi.json";

            // Mendapatkan file json
            $anggota = file_get_contents($file);
 
            // Mendecode anggota.json
            $data2 = json_decode($anggota, true);
 
            // Data array baru yang masuk ke .json
            $data2[] = array (
 
                'bangunRuang' => "Persegi",
                'sisiPersegi' => "$sisipersegi",
                'luasPersegi' => "$luaspersegi"
             
            );
             
            $konten = json_encode($data2, JSON_PRETTY_PRINT);
 
            //menyimpan konten di file
            file_put_contents($file, $konten);

            // Membaca data array menggunakan foreach
            echo '<u>Rekap Perhitungan Luas Persegi</u><br><br>';
            foreach ($data2 as $d) {
                echo 'Hasil Hitung Luas Persegi:<br>';
                echo 'Sisi Persegi: '.$d['sisiPersegi']. 'cm<br>';
                echo 'Luas Persegi<br>= Sisi x Sisi<br>';
                echo '= '.$d['sisiPersegi'].' x '.$d['sisiPersegi'].'<br>';
                echo '= '.$d['luasPersegi'].' cm <br><br>';
                // echo 'Tinggi Segitiga: '.$tinggisegitiga.' cm<br><br>';
                // echo '= ('.$alassegitiga.' x '.$tinggisegitiga.') / 2';
                // echo '<br>= '.$luassegitiga.' cm';

                // echo $d['no']. "<br>";
                // echo $d['nama']. "<br>";
                // echo $d['alamat']. "<br><br>";
            }
        }
    }
    elseif(isset($_POST['hitungluaslingkaran'])){
        if(!empty($_POST['hitungluaslingkaran'])) {
            $jarilingkaran = $_POST['jarijari'];
            $luaslingkaran=3.14 * $jarilingkaran * $jarilingkaran;

            // File json yang akan dibaca
            $file = "tugas4_christopherimanuellingkaran.json";

            // Mendapatkan file json
            $anggota = file_get_contents($file);
 
            // Mendecode anggota.json
            $data3 = json_decode($anggota, true);
 
            // Data array baru yang masuk ke .json
            $data3[] = array (
 
                'bangunRuang' => "Lingkaran",
                'jariLingkaran' => "$jarilingkaran",
                'luasLingkaran' => "$luaslingkaran"
             
            );
             
            $konten = json_encode($data3, JSON_PRETTY_PRINT);
 
            //menyimpan konten di file
            file_put_contents($file, $konten);

           // Membaca data array menggunakan foreach
           echo '<u>Rekap Perhitungan Luas Lingkaran</u><br><br>';
           foreach ($data3 as $d) {
               echo 'Hasil Hitung Luas Lingkaran:<br>';
               echo 'Jari-Jari Lingkaran: '.$d['jariLingkaran']. 'cm<br>';
               echo 'Luas Lingkaran<br>= Phi x Jari-Jari x Jari-Jari<br>';
               echo '= 3.14 x '.$d['jariLingkaran'].' x '.$d['jariLingkaran']. '<br>';
               echo '= '.$d['luasLingkaran'].' cm <br><br>';
           }
        }
    }
?>