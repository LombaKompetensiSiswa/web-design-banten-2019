<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sekolah';

try{
$dbconfig = new PDO("mysql:host={$host};dbname={$dbname}",$user,$password);
$dbconfig->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	return $e->getMessage();
}
include_once 'class.login.php';
$login = new login($dbconfig);
?>