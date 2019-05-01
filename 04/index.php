<?php

	include_once("function/helper.php");
	include_once("function/koneksi.php");


	session_start();
	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$module = isset($_GET['module']) ? $_GET['module'] : false;
	$action = isset($_GET['action']) ? $_GET['action'] : false;
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;

	unset($_SESSION['user_id']);
	unset($_SESSION['level']);
	unset($_SESSION['user']);

	?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo BASE."css/style.css"; ?>" media="all" rel="stylesheet">

</head>

<body>
<header>
	<div class="container">
		<div class="logo">
			<img src="<?php echo BASE."images/bantenlogo.png"; ?>"> <span>KPU PROVINSI BANTEN</span>
		</div>

		<div class="akun">
			<?php
				if($user_id){

					if($level == "admin"){
						echo "<span class='hoverac'>Hi $user,
						<div class='account'>
							<a href='".BASE."dashboard.php?module=partai&action=list'>dashboard</a>
						</div>
					</span>";
					}

					else if($level == "petugas"){
						echo "<span class='hoverac'>Hi $user,
						<div class='account'>
							<a href='".BASE."dashboard.php?module=partai&action=list'>dashboard</a>
						</div>
					</span>";
					}
				}	

				else{
						echo "<a class='btn-act' href='".BASE."profile.php?page=login'>Login</a>";
					}
			?>
		</div>
	</div>
</header>
<nav>
	<div class="container">
			<a href="<?php echo BASE."index.php"; ?>">Beranda</a>
			<a href="<?php echo BASE."index.php?page=jadwal-pelaksanaan"; ?>">Jadwal</a>
			<a href="<?php echo BASE."index.php?page=lokasi"; ?>">Lokasi</a>
			<a href="<?php echo BASE."index.php?page=about"; ?>">Tentang</a>
	</div>
</nav>
<div class="container">
		<img src="<?php echo BASE."images/wallpaper.jpg"; ?>" class="slide">
</div>
<!--
<section class="partai">
	<div class="container">
		<span class="choice">
			Kandidat Calon
		</span>
		<ul class="partai_pem">
			<li><img src="<?php echo BASE."images/avatar.png";?>"></li>
			<li><img src="<?php echo BASE."images/avatar2.png";?>"></li>
			<li><img src="<?php echo BASE."images/avatar3.png";?>"></li>
			<li><img src="<?php echo BASE."images/avatar4.png";?>"></li>
			<li><img src="<?php echo BASE."images/avatar5.png";?>"></li>
		</ul>
		<span class="info-pemilu">
			Lihat informasi lebih banyak
		</span>

	</div>
</section>
-->
<section class="search">
	<div class="container">
		<div>
			<span>Cari Informasi</span>
			<h2>Silahkan Cari disini</h2>
		</div>

		<form method="get" action="main.php">
			<input type="text" placeholder="jadwal pelaksanaan" name="seacrh">
			<input type="submit" class="btn-act" value="search">
		</form>
	</div>
</section>

<section class="article">
	<div class="container">
		<?php
			$file = "$page.php";
			$folder = "module/$module/$action.php";

			if(file_exists($file)){
				include_once($file);
			}

			else{
				include_once("main.php");
			}
		?>

		<div class="teratas">
			<h3>Top Search</h3>
			<ul>
				<?php 

					$query = mysqli_query($koneksi, "SELECT * FROM blog");

					while($row = mysqli_fetch_assoc($query)){
						echo "<li><img src='".BASE."images/$row[gambar]'>$row[judul]</li>";
					}

					?>
			</ul>
		</div>
	</div>
</section>

<section class="foot_top">
	<div class="container">
		<ul>
			<h2>Quick Menu</h2>
			<li>Beranda</li>
			<li>Tentang</li>
			<li>Data pemilih</li>
			<li>Kandidat Pemilu</li>
		</ul>
		<ul>
			<h2>Social media</h2>
			<li>Facebook</li>
			<li>Twitter</li>
			<li>Instagram</li>
			<li>Kandidat Pemilu</li>
		</ul>
	</div>
</section>
<footer>
	<div class="container">
		<p>Copyright &copy; Kpu Provinsi Banten 2019</p>
	</div>
</footer>
<script src="<?php echo BASE."js/jquery-1.10.2.js"; ?>"></script>
</body>
</html>