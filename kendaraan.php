<?php
class kendaraan
{
var $jumlahroda;
var $warna;
var $bahanbakar;
var $harga;
var $merek;
var $tehunpembuatan;

function dapatSubsidi()
{
if($this-> bahanbakar > premium) $status ='ya';
else $status ='tidak';
return $status;
if($this-> tahunpembuatan > 2005) $status ='ya';
else $status ='tidak';
return $status;
}
}
?>