<!DOCTYPE html>
<html>

<head>
<?php
include 'config/koneksi.php';
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>Pemilu</title>
</head>
<body>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php#about">About</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)">Info Pemilu</a>
				<div class="dropdown-content">
					<a href="index.php#hasil">HASIL</a>
					<a href="index.php#tps">Info TPS</a>
					<a href="index.php#pemilih">Info Pemilih</a>
				</div>
			</li>
			<li><a href="index.php#news">News</a></li>
			<li><a href="galeri.php">Galeri</a></li>
		</ul>