<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "pemilu";

$koneksi=mysqli_connect($server,$user,$password,$db);
if (!$koneksi) {
	echo "koneksi gagal";
} else {
	//echo "berhasil";
}
?>