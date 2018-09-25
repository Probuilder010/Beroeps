<!doctype html>
<?php 

//foutmelding zichtbaar maken

error_reporting(E_ALL);
ini_set('display_errors','1');



$db_hostname = 'localhost';
$db_username = 'Admin';
$db_password = 'Geheim1!';
$db_database = '82261_Kookclub';

$mysqli = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

if (!$mysqli){
	echo "FOUT: geen connectie naar database <br>";
	echo "Errno:". mysqli_connect.errno() . "<br>";
	echo "ERROR:". mysqli_connect.errno() . "<br>";
	
}

?>