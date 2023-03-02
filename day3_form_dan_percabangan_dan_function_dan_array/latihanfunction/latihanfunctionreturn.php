<?php
function hitungUmur($awal,$akhir)
{
$umur = $akhir - $awal;
return $umur;
}
echo "umur saya adalah ".hitungUmur(1994,2015)."Tahun";
?>