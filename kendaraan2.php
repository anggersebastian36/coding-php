<?php
class kendaraan
{
var $jumlahroda;
var $warna;
var $bahanbakar;
var $merek;
var $tahunpembuatan;

function hargasecond()
{
If($this-> tahunpembuatan >  20002005) $status='30%';
else $status='0%';
return $status;
}
}
$a = new kendaraan();
echo $a->hargaSecond();
?>
