<?php
include 'kasus03-class.php';

// parameter koneksi mysql
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$mydb = 'test';

//instantisasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb);

// koneksi ke MYSQL via method
$db->connectMYSQL();

// insert data buku via method
$db->addBuku('Pemrograman OOP di PHP', 'Rosihan Ari Yuana', 'Penerbit Sendiri', '2012');
?>	