<?php

class database
{
// properties
	private $dbHost;
	private $dbUser;
	private $dbPast;
	private $dbName;

// costructor
function __construct($a, $b , $c , $d)
{
	$this->dbHost = $a;
	$this->dbUser = $b;
	$this->dbPass = $c;
	$this->dbName = $d;
}

// method koneksi mysql
function connectMYSQL()
{
	mysql_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
	mysql_select_db($this->dbName);
}
}
?>
	