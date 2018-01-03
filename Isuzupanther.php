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
If($this-> harga > 50000000) $status='mahal';
else $status='murah';
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
$kendaraan2 = new kendaraan();
$kendaraan2->setMerek('Isuzu Panther');
$kendaraan2->setJumlahroda(4);
$kendaraan2->setHarga(170000000);
$kendaraan2->setWarna('Hitam');
$kendaraan2->setBahanbakar('Solar');
echo 'Kendaraan' .$kendaraan2->bacaMerek(). 'memiliki' .$kendaraan2->bacaJumlahroda(). 'roda,'; 
?>














