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
<h1>Berikut ini jadwal pelaksanaan pemilu</h1>
<table>
	<?php
		include 'config/dbconfig.php';
		$id_e = $_GET['id_tps'];
		$query = $dbconfig->prepare("SELECT tps.nama_tps,pelaksanaan.tgl_pelaksanaan FROM pelaksanaan INNER JOIN tps ON pelaksanaan.id_tps = tps.id_tps WHERE pelaksanaan.id_tps=:id_e");
		$query->bindparam(":id_e",$id_e);
		$query->execute();
		while($row = $query->fetch()){
			echo"<tr>";
			echo "<td>".$row['nama_tps']."</td>";
			echo "<td>".$row['tgl_pelaksanaan']."</td>";;
			echo "</tr>";
		}
		?>
</table>
</body>
</html>