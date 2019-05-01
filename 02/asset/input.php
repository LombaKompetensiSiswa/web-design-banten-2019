<style type="text/css">
.head img{
	width: 50px;
	height: 50px;
	padding: 10px 10px;
	float: top;
}

.head {
	background: #006400;
	width: 96%;
	height :10%;
}

.dashboard {
	background: #32CD32;
	float: left;
	height: 100%;
	width: 22%;
}

.dashboard ul li{
	display: block;
	margin : 2px 2px 4px;

}

.dashboard ul li a{
	color : white;
	text-transform: uppercase;
}

.dashboard ul li a:hover{
	background: #006400;

}

.konten {
	padding-left: 50px;
	padding-right: 30px;
	background: white;
	width: 900px;
	height: 645px;
	float: right;
}

		fieldset {
			width: 300px;
			height: 120px;
		}

		legend {
			text-align: : center;
		}
</style>
<div class="head">
	<h3>Pemilu Online</h3>
</div>

<div class="dashboard">
<ul>
	<li><a href="input.php">User dan Petugas</li>
	<li><a href="">Saksi-Saksi</li>
	<li><a href="">Rekapitulasi Hasil Suara</li>
	<li><a href="">Informasi TPS</li>
	<li><a href="">Daftar Partai</li>
</ul> 
</div>
	
<div class="konten">
	<form action="" method="post">
<table>
	<tr>
		<td>Nama Petugas</td>
		<td>: <input type="text" name="namapetugas"></td>
	</tr>
	<tr>
		<td>Nama Saksi</td>
		<td>: <input type="text" name="namasaksi"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"> <input type="reset" name="batal" value="Batal"></td>
	</tr>
</table>
	<?php
		if(isset ($_POST['simpan'])) {
			$namapetugas = $_POST['namapetugas'];
			$namasaksi = $_POST['namasaksi'];
			$simpan = $_POST['simpan'];

			$server = "localhost";
			$akun = "root";
			$pswd = "";
			$db = "komar";

			$koneksi = mysqli_connect("$server","$akun","$pswd");
			mysqli_select_db("$db");
			$insert = ("insert into petugas values('','$namapetugas','$namasaksi')");
			mysqli_query('$koneksi','$insert');
			
		}
	?>
</form>
</div>


