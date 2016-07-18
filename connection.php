<?php

/*$serverName = 'localhost';
$userName	= 'root';
$password	= '';
$dbName		= 'hazzirco_subscribers';*/


$serverName = 'localhost';
$userName	= 'hazzirco_app';
$password	= 'Hazzirco@app';
$dbName		= 'hazzirco_subscribers';

$constr		= mysql_connect($serverName, $userName, $password) or die('Cant connect to server');
mysql_select_db($dbName, $constr) or die('Could not select database');