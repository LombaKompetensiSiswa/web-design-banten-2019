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
		<td>id partai</td>
		<td>nama partai</td>
		<td>alamat partai</td>
		<td>no telepon</td>
		<td>action</td>
	</tr>
		<?php
		include 'dbconfig.php';
		$query = $dbconfig->prepare("SELECT * FROM partai WHERE flag=1");
		$query->execute();
		while($row = $query->fetch()){
			echo"<tr style='height:20px;'>";
			echo "<td>".$row['id_partai']."</td>";
			echo "<td>".$row['nama_partai']."</td>";
			echo "<td>".$row['alamat_partai']."</td>";
			echo "<td>".$row['no_telepon']."</td>";
			echo "<td class='cecep'><a href=updatepartai.php?id_partai=".$row['id_partai'].">update</a>";
			echo "<a href=delete.partai.php?id_partai=".$row['id_partai'].">delete</a></td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>