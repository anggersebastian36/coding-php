<?php
class kendaraan
{
var $jumlahroda;
var $mwarna;
var $bahanbakar;
var $merek;
var $tahunpembuatan;

function hargaSecond()
{
If($this-> tahunpembuatan > 2005) $status='-20%';
else $status='0&';
return $status;
}
}
$kendaraan1 = new kendaraan();
$kendaraan2 = new kendaraan;
$kendaraan3 = new kendaraan();
?>
