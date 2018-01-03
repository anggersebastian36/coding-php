<?php
include 'kasus02-class.php';

// parameter koneksi mysql
$host = 'localhost';
$user = 'Root';
$pass = '';
$mydb = 'test';

// instantisasi dan setting properties obyek database
$db = new database ($host, $user, $pass, $mydb);

// koneksi ke mysql via method
$db->connectMYSQL();

?> 