<?php
class operasiBilangan
{
//properties dari class
	private $bilangan1;
	private $bilangan2;

//constructor
function __construct($x, $y)

{
	$this->bilangan1 = $x;
	$this->bilangan2 = $y;
}

//method untuk membaca property bilangan1
function bacaBilangan1()
{
	return $this->bilangan1;
}
//method untuk membaca property bilangan2
funtion bacaBilangan2()
{
	return $this->bilangan2() 
}
//method untuk menjumlahkan bilangan1 dan bilangan2
function jumlahkan()
{
	$hasil = $this->bilangan1 + $this->bilangan2;
	return $hasil;
}
//method untuk mengalikan bilangan1 dan bilangan2
funtion kalikan()
{
	$hasil = $this->bilangan1 * $this->bilangan2;
	return $hasil;
}
//method untuk mengurangkan bilangan1 dan bilangan2
function kurangkan()
{
	$hasil = $this->bilangan1 - $this->bilangan2;
	return $hasil;
}	
}

//instantisasi dan setting propeties
$operasi1 = new operasiBilangan(4, 5);
 
//menampilkan hasil penjumlahan
	echo '<p>hasil penjumlahan '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().'
	adalah '.$operasi1->jumlahkan().'</p>';
//Menampilkan hasil perkalian
	echo '<p>hasil perkalian '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().'
	adalah '.$operasi1->kalikan().'</p>';
//Menampilkan	
?>


















