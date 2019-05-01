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
<header class="header">
	<div class="container">
		<h2>Dashboard</h2>
		<form method="get" action="main.php">
			<input type="text" placeholder="jadwal pelaksanaan" name="seacrh">
			<input type="submit" class="btn-act">
		</form>
	</div>
</header>
<section class="content">
	<div class="container">
		<div class="left">
			<ul>
				<li><a  <?php if($module == "user"){echo "class='active'";}?> href="<?php echo BASE."dashboard.php?module=user&action=list"; ?>">User</a>
				</li>
				
				<li><a  <?php if($module == "partai"){echo "class='active'";}?> href="<?php echo BASE."dashboard.php?module=partai&action=list"; ?>">Kandidat Pemilu</a>
				</li>
				<li><a  <?php if($module == "tps"){echo "class='active'";}?> href="<?php echo BASE."dashboard.php?module=tps&action=list"; ?>">Tps</a>
				</li>
				<li><a  <?php if($module == "pemilih"){echo "class='active'";}?> href="<?php echo BASE."dashboard.php?module=pemilih&action=list"; ?>">Data Pemilih</a>
				</li>
				<li><a  <?php if($module == "blog"){echo "class='active'";}?>href="<?php echo BASE."dashboard.php?module=blog&action=list"; ?>">Blog</a>
				</li>
			</ul>
		</div>

		<div class="right">
			<?php

				$folder = "module/$module/$action.php";
				if(file_exists($folder)){
					include_once($folder);
				}

				else{
					echo "maaf, file yang anda cari tidak ditemukan";
				}
			?>
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
</body>
</html>