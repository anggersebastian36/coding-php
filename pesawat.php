
 <?php

class kendaraan
{
protected $jumlahRoda;
public $warna;
public $bahanBakar;
public $harga;
private $merek;
private $tinggiMaks;
private $kecepatanMaks;

function biayaOperasional()
	{
		If ($this->tinggiMaksimum > 5000 feet $this->kecepatanMaks-> 800 km/jam) $status= '30%';
		else $status= '0';
		return $status;
	}
function biayaOperasional()
	{
		If ($this->tinggiMaksimum  3000-5000 feet $this->kecepatanMaks-> 500-800 km/jam) $status= '20%';
		else $status= '0';
		return $status;
	}

function biayaOperasional()
	{
		If ($this->tinggiMaksimum < 3000 feet $this->kecepatanMaks-> <500 km/jam) $status= '10%';
		else $status= '0';
		return $status;
	}

function biayaOperasional()
	{
		If ($this->biayaOperasional > 50000000) $status= '5%';
		else $status= '0';
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
function settinggiMaks ($x)
	{
		$this->tinggiMaks = $x;
	}
function setkecepatanMaks($x)
	{
		$this->kecepatanMaks = $x;
	}
function bacaMerek($x)
	{
		return $this->merek;
	}
function bacaHarga($x)
	{
		return $this->harga;
	}
function bacatinggiMaks($x)
	{
		return $this->tinggiMaks;
	}
function bacakecepatanMaks($x)
	{
		return $this->kecepatanMaks;
	}

function __contruct($x, $y)
	{
		$this->merek = $x;
		$this->harga = $y; 
	}
}

class pesawat extends kendaraan
	{
		private $TinggiMaks;
		function $setTinggiMaks;
	{
		$this->TinggiMaks = $x;
	}
function bacaTinggiMaks()
	{
		return $this->TinggiMaks;
		
	}
	}
{
	private $KecepatanMaks;
	function $setKecepatanMaks;
	{
		$this->KecepatanMaks = $x;
	}
	function bacaKecepatanMaks()
	{
		return $this->KecepatanMaks;
		
	}
}	
	$kendaraan2 = new kendaraan();
	$kendaraan2->setMerek('Boeing 737');
	$kendaraan2->setHarga(2000000000);
	$kendaraan2->tinggiMaks(7500);
	$kendaraan2->kecepatanMaks(650);
echo 'Biaya operasional pesawat' .$kendaraan2->bacaMerek(). 'dengan harga' .$kendaraan2->bacaHarga(). 'yang memiliki tinggi maksimum' 
.$kendaraan2->bacatinggiMaks(). 'dan kecepatan maksimum' .$kendaraan2->kecepatanMaks().; 
	
?>



 






