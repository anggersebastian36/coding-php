<?php
include 'kasus04-class.php';

// parameter koneksi mysql
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$mydb = 'test';

// instantisasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb);

// koneksi mysql ke via method
$db->connect MYSQL();

// tampilkan data via method
$db->tampilBuku();
?>
