<?php
$arrNilai = array ("Dimas" => 80, "Angger" => 90, "Ryo" => 75,
"Bhre" => 85);
echo  "Menampilkan is array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) { 
echo "Nilai $nama = $nilai<br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrnilai)) {
echo "Nilai $nama = $nilai<br>";
}
?>



