<?php
$arrNilai = array ("Dimas" =>80, "Angger" => 90, "Ryo" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>

