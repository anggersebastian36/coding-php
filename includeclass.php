<?php
include 'class-kendaraan.php';

$kendaraan1 = new kendaraan1();
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setharga(10000000);
echo 'Harga dari '.$kendaraan1->bacaMerek().' adalah Rp. '.$kendaraan1->bacaHarga();
?> 