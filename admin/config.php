<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'xii_rpl_a';
$databaseUsername = 'root';
$databasePassword = '';
 
$config = mysqli_connect('localhost','root','','xii_rpl_a');
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli->connect_error){
	die("Koneksi gagal");
}

 
?>