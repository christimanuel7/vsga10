<?php


$cabang =  array("Pademangan Barat", "Pademangan Timur", "Rajawali", "Kemayoran","Ampera");

array_multisort($cabang, SORT_ASC);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pesan Laundry</title>
  </head>
  <body style="margin: 40px;">
    <h1>Form Pemesanan Laundry</h1>
    <img src="./img/laundry.png" alt="" width="400px">
    <form action="#" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Cabang:</label>
                </div>
                <div class="col">
                    <select id="cabang" class="form-control" id="exampleFormControlSelect1" name="cabang">
					    <option value="">- Pilih Cabang -</option>
                            <?php
                            
                            foreach ($cabang as $ap) {
                                echo "<option value='" . $ap . "'>" . $ap . "</option>";
                            }
                            ?>
					</select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Nama Pelanggan:</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="exampleFormControlInput1" required placeholder="" name="nama">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Nomor HP:</label>
                </div>
                <div class="col">
                    <input type="tel" class="form-control" id="exampleFormControlInput1" required placeholder="" name="noHp">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Jumlah Dalam Kg. :</label>
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="exampleFormControlInput1" required placeholder="" name="jumlahKg">
                </div>
            </div>
        </div>
        <button type="submit" name="pesan" value="ok" class="btn btn-primary mb-2">Pesan</button>
    </form>
    <?php
        if(isset($_POST['pesan'])){
            $cabangPilihan=$_POST['cabang'];
            $namaPelanggan=$_POST['nama'];
            $nomorHP=$_POST['noHp'];
            $hargaPerKilo=5000;
            $jumlahPesanan=$_POST['jumlahKg'];
            $tagihanAwal=$jumlahPesanan * $hargaPerKilo;
            $hasilAwal = "Rp " . number_format($tagihanAwal,2,',','.');
            if($tagihanAwal>=100000){
                $diskon=0.05;
            }
            else{
                $diskon=0;
            }
            $potonganDiskon=$tagihanAwal*$diskon;
            $hasilDiskon = "Rp " . number_format($potonganDiskon,2,',','.');
            $tagihanAkhir=$tagihanAwal-$potonganDiskon;
            $hasilAkhir = "Rp " . number_format($tagihanAkhir,2,',','.');
            
            // File json yang akan dibaca
            $file = "json/hasil.json";

            // Mendapatkan file json
            $anggota = file_get_contents($file);

            // Mendecode anggota.json
            $data = json_decode($anggota, true);

            // Data array baru yang masuk ke .json
            $data[] = array (
                'cabang' => "$cabangPilihan",
                'namaPelanggan' => "$namaPelanggan",
                'nomorHp' => "$nomorHP",
                'jumlahPesananBaju' => "$jumlahPesanan",
                'tagihanAwal' => "$hasilAwal",
                'diskon' => "$hasilDiskon",
                'tagihanAkhir' => "$hasilAkhir",
            );
            
            $konten = json_encode($data, JSON_PRETTY_PRINT);

            //menyimpan konten di file
            file_put_contents($file, $konten);

            // Membaca data array menggunakan foreach
            foreach ($data as $d) {
                echo'<br>Cabang: '.$d['cabang'];
                echo'<br>Nama Pelanggan: '.$d['namaPelanggan'];
                echo'<br>Nomor HP: '.$d['nomorHp'];
                echo'<br>Jumlah Pesanan Baju: '.$d['jumlahPesananBaju'].' Kg.';
                echo'<br>Tagihan Awal: '.$d['tagihanAwal'];
                echo'<br>Diskon: '.$d['diskon'];
                echo'<br>Tagihan Akhir: '.$d['tagihanAkhir'];
                echo'<br>';
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>