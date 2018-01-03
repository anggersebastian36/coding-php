<?php
class kendaraan
{
var $jumlahroda;
var $warna;
var $bahanbakar;
var $merek;
var $tahunpembuatan;

function hargaSecond()
{
if($this-> tahunpembuatan > 2005) $status='-20%';
else $status='0%';
return $status;
}
}
$a = new kendaraan();
echo $a->hargaSecond();
?>