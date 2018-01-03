<?
class Mobil
{
	var $warna;
	var $merk;
    var $harga;
	function __construct()
	{
		$this->warna = "Biru";
		$this->merk = "BMW";
		$this->harga = "10000000";
	}
	function gantiwarna ($warnaBaru)
	{
		$this->warna = $warnabaru;
	}
	function tampilWarna();
	{
		echo "Warna mobilnya : " . $this->warna;
	}
}
$a = new Mobil();
$b = new Mobil();
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
//
echo "<b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>

	

