<?php
class kendaraan
{
var $jumlahroda;
var $warna;
var $bahanbakar;
var $merek;
var $tahunpembuatan;

function statusHarga()
{
If($this-> harga > 50000000) $status='mahal';
else $status='murah';
return $status;
}
function setMerek($X)
{
$this-> merek = $X;
}
function setHarga($X)
{
$this-> harga = $X;
}
function bacaMerek();
{
	return $this->Merek;
}
function bacaHarga();
{
	return $this->Harga;
}
}
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
echo 'Harga dari '.$kendaraan1->bacaMerek().' adalah Rp. '.$kendaraan1->bacaHarga();
?>