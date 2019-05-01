<?php
session_start();
include '../config/koneksi.php';
if (empty($_SESSION['username'])) {
	echo "<script>alert ('Anda Belum Login !');window.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Admin</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="assets/admin.css">
</head>
<body>
		<ul>
			<li> <a href="index.php">Home</a></li>
			<li class="dropdown">
				<a href="">Menu Petugas</a>
				<div class="dropdown-content">
					<a href="suaratps.php">Input Suara</a>
					<a href="Pemilihtps.php">Input Pemilih</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="">Menu Admin</a>
				<div class="dropdown-content">
					<a href="settingtps.php">Setting TPS</a>
					<a href="settinguser.php">Setting User</a>
					<a href="tambahpartai.php">Setting Partai</a>
					<a href="settinggaleri.php">Setting Galeri</a>
					<a href="settingberita.php">Setting Berita</a>
					<a href="settingabout.php">Setting About</a>
				</div>
			</li>
			<li><a href="logout.php">Logout</a></li>
		</ul>