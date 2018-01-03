<?php

class kendaraan
{
protected $jumlahRoda;
public $warna;
public $bahanBakar;
public $harga;
private $merek;

function statusHarga()
{
If ($this->harga > 50000000) $status= 'Mahal';
else $status= 'murah';
return $status;
}

function setMerek($x)
{
$this->merek = $x;
}
function setHarga($x)
{
$this->harga = $x;
}
function bacaMerek($x)
{
return $this->merek;
}
function bacaHarga($x)
{
return $this->harga;
}
function __contruct($x, $y)
{
$this->merek = $x;
$this->harga = $y; 
}
}
class keretaApi extends kendaraan
{
	public $jumGerbong;
	function $setGerbong;
	{
		$this->jumGerbong = $x;
	}
	function bacaGerbong()
	{
		return $this->jumGerbong;
		
	}
}
?>



 






