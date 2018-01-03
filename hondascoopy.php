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
If ($this->harga > 50000000) $status= 'Mahal';
else $status= 'Murah';
return $status;
}

function setMerek($X)
{
$this-> merek = $X;
}

function setJumlahroda($X)
{
$this-> jumlahroda = $X;
}

function setHarga($X)
{
$this-> harga = $X;
}

function setWarna($X)
{
$this-> warna = $X;
}

function setBahanbakar($X)
{
$this-> bahanbakar = $X;
}
}
$kendaraan3 = new kendaraan();
$kendaraan3->setMerek('Honda Scoopy');
$kendaraan3->setJumlahroda(2);
$kendaraan3->setHarga(13000000);
$kendaraan3->setWarna('Putih');
$kendaraan3->setBahanbakar('Premium');
echo $kendaraan3->statusHarga();
?>














