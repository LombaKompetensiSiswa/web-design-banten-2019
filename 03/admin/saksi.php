<!DOCTYPE html>
<html>
<head>
	<title>tabel data partai</title>
</head>
<style type="text/css">
	tr{
		width: 80%;
		height: 100px;
	}
	.cecep{
		margin-right: 30px;
	}
</style>
<body>
<div class="header-menu" style="width:100%;height:150px;background:red;">
<img src="../images/bantenlogo.png" style="width:100px;height:100px;margin-left:100px;margin-top:40px;"/>
<ul style="list-style-position:vertical;list-style-type:none;float:right; margin-right:80px;">
<li><a href="partai.php">partai</a></li>
<li><a href="pemilihan.php">pemilihan</a></li>
<li><a href="tps.php">Tps</a></li>
<li><a href="saksi.php">saksi</a></li>
<li><a href="artikel.php">artikel</a></li>
</ul>
</div>
<table style="width: 80%; border-color: black;">
	<tr>
		<th>id saksi</th>
		<th>nama saksi</th>
		<th>alamat partai</th>
		<th>no telepon</th>
		<th>id partai</th>
		<th>action</th>
	</tr>
		<?php
		require_once 'dbconfig.php';
		$stmt = $dbconfig->prepare("SELECT * FROM saksi WHERE flag=1");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo"<tr>";
			echo "<td>".$row['id_saksi']."</td>";
			echo "<td>".$row['nama_saksi']."</td>";
			echo "<td>".$row['alamat_saksi']."</td>";
			echo "<td>".$row['no_telepon']."</td>";
			echo "<td>".$row['id_partai']."</td>";
			echo "<td><a href=update.saksi.php?id_saksi=".$row['id_saksi'].">update</a>";
			echo "<a href=delete.saksi.php?id_saksi=".$row['id_saksi'].">delete</a></td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>
