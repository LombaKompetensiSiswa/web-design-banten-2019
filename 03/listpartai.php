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
<h1>Berikut ini adalah daftar partai peserta pemilu</h1>
<table>
	<tr>
		<td>nama partai</td>
		<td>alamat partai</td>
		<td>no telepon</td>
	</tr>
	<?php
		include 'config/dbconfig.php';
		$query = $dbconfig->prepare("SELECT * FROM partai");
		$query->execute();
		while($row = $query->fetch()){
			echo"<tr>";
			echo "<td>".$row['nama_partai']."</td>";
			echo "<td>".$row['alamat_partai']."</td>";
			echo "<td>".$row['no_telepon']."</td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>