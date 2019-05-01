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
	height: 200px;
	flex-direction: column;
}
</style>
</head>
<body style="margin:0px;padding:0px;">
<div class="header-menu" style="width:100%;height:150px;background:blue;">
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
		$query = $dbconfig->prepare("SELECT * FROM artikel WHERE flag=1 AND publish_status=1");
		$query->execute();
		while($row = $query->fetch()){
			echo"<div class='gokil'>";
			echo "<p>".$row['judul']."</p>";
			echo "<p>".$row['deskripsi']."</p>";
			echo "<p>".$row['tgl_tambah']."</p>";
			echo "<a href=viewartikel.php?id_artikel=".$row['id_artikel'].">view artikel</a>";
			echo "</div>";
		}
		?>
</div>
</body>
</html>