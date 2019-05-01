<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sekolah';

try{
$dbconfig = new PDO("mysql:host={$host};dbname={$dbname};",$user,$password);
$dbconfig->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	return $e->getMessage();
}
include_once 'class/class.partai.php';
$partai = new partai($dbconfig);

include_once 'class/class.pemilih.php';
$pemilih = new pemilih($dbconfig);

include_once 'class/class.saksi.php';
$saksi = new saksi($dbconfig);

include_once 'class/class.tps.php';
$tps = new tps($dbconfig);

include_once 'class/class.artikel.php';
$artikel = new artikel($dbconfig);

include_once 'class/class.login.php';
$login = new login($dbconfig);
?>