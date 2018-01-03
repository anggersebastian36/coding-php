<?php
include 'class-kendaraan.php';
$kereta1 = new keretaApi('KA lokomotif', 15000000);
$kereta1->setGerbang(20);
echo 'jumlah gerbang dari '.$kereta1->bacaMerek().
     'yang harga dari '.$kereta1->bacaHarga().
	 'adalah '.$kereta1->bacaGerbong();
	 ?>
	 