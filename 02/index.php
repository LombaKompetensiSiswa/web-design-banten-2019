<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<h2>TPS Digital</h2>
	<div class="nav">
		<ul>
			<li><a href="?page=beranda">Beranda</li>
			<li><a href="?page=informasitps">Informasi TPS</li>
			<li><a href="?page=partai">Partai</a></li>
			<li><a href="?page=about">About Us</li>
			<li><a href="?page=kontak">Contact Us</li>
			<li style="float: right;"><a href="login.php">Login</li>
		</ul>
	</div>

	<div class="konten">
		<?php
			if (@$_GET['page']=='beranda') {
				include 'asset/beranda.php';
			} elseif (@$_GET['page']=='informasitps') {
				include 'asset/informasi.php';
			} elseif (@$_GET['page']=='login') {
				include 'asset/login.php';
			} elseif (@$_GET['page']=='partai') {
				include 'asset/partai.php';
			} elseif (@$_GET['page']=='kontak') {
				include 'asset/kontak.php';
			} elseif (@$_GET['page']=='about') {
				include 'asset/about.php';
			}
		?>
	</div>
	<br>
	<div class="sidebar">
		<h3>Deskripsi</h3>
			<p>Aplikasi TPS Digital ini digunakan untuk memberi informasi tentang Pemilu di indonesia</p>
			<hr>
			<hr>
	</div>

</body>
</html>