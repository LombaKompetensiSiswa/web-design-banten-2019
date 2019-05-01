<!DOCTYPE html>
<html>
<head>
<title>Tentang website pemilu</title>
<style type="text/css">
.header-menu{
    width:100%;
    height:150px;
    background:red;
    
}
.artikel{
	width:100%;
	margin-top: 200px;
}
.gokil{
	width: 500px;
	margin-left: 10%;
	height: 200px;
	flex-direction: column;
}
</style>
</head>
<body style="margin:0px;padding:0px;">
<div class="header-menu" style="width:100%;height:150px;background:red;">
<img src="images/bantenlogo.png" style="width:100px;height:100px;margin-left:100px;margin-top:40px;"/>
<ul style="list-style-position:vertical;list-style-type:none;float:right; margin-right:80px;">
<li><a href="partai.php">partai</a></li>
<li><a href="pemilihan.php">pemilihan</a></li>
<li><a href="tps.php">Tps</a></li>
<li><a href="saksi.php">saksi</a></li>
</ul>
</div>
<div class="artikel">
	<?php
		include 'config/dbconfig.php';
		$id_artikel = $_GET['id_artikel'];
		$query = $dbconfig->prepare("SELECT * FROM artikel WHERE flag=1 AND publish_status=1 AND id_artikel=:id_artikel LIMIT 1");
		$query->execute(array(':id_artikel' => $id_artikel));
		while($row = $query->fetch()){
			echo"<div class='gokil'>";
			echo "<h1>".$row['judul']."</h1>";
			echo "<h3>".$row['deskripsi']."</h3>";
			echo "<p>".$row['isi']."</p>";
			echo "<p>".$row['tgl_tambah']."</p>";
			echo "</div>";
		}
		?>
</div>
</body>
</html>