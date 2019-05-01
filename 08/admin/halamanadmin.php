<?php include"program/ceksesi.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>.::Halaman admin</title>
	<link rel="stylesheet" type="text/css" href="css/halamanadmin.css">
</head>
<body>
	<div id="navbar">
		<h5>Admin</h5>
		
	</div>
	<div id="sidebar">
		<img src="../image/avatar5.png">
		<h5>Admin</h5>

		<ul>
			<li><a href="?isi=user">User</a></li>
			<li><a href="?isi=partai">Partai</a></li>
			<li><a href="?isi=tps">TPS</a></li>
			<li><a href="program/keluar.php" onclick="return confirm('Apakah anda mau keluar?')">Keluar</a></li>
		</ul>
	</div>

	<div class="container">
			<div id="box1">
					User 2
				<div id="detail1">
					<a href="#">Cek Detail</a>
				</div>
			</div>
			<div id="box2">
					 Partai
				<div id="detail2">
					<a href="#">Cek Detail</a>
				</div>
			</div>
			<div id="box3">
					TPS
				<div id="detail3">
					<a href="#">Cek Detail</a>
				</div>
			</div>
			<div id="box4">
					Suara
				<div id="detail4">
					<a href="#">Cek Detail</a>
				</div>
			</div>

		<div id="content">
			<?php include"program/isi.php" ?>
		</div>
	</div>
</body>
</html>