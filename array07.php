<?php
$arrNilai = array ("Dimas" => 80, "Angger" => 90, "Ryo" => 75,
"Bhre" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo"</pre>";
asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "<pre>";
?>

