
	<?php
	include 'header.php';
if ($_SESSION['status_user'] == '0' ) {
		echo "<script>alert ('Admin ! !');window.location='index.php'</script>";
}
	$id_tps = $_GET['id_tps'];
	date_default_timezone_set('Asia/Jakarta');
	include '../config/koneksi.php';
?>
	<?php
	$sql = mysqli_query($koneksi,"SELECT * FROM tps WHERE id_tps='$id_tps'");
	$data = mysqli_fetch_array($sql);
		?>	
<div class="content-index" style="padding-top: 5px;">
				<section id="info-tps">
					<h1 class="text-title">Informasi TPS</h1>
		<div class="card" align="center">
			<div class="card-title">
			<img src="../images/kotaksuara.png">
			<p><b>Lokasi Tps :</b> <?php echo $data['lokasi_tps']?></p>
			<p><b>Jadwal Tps:</b> <?php echo date("H:i",strtotime($data['jadwalwaktu_tps']))?>, <?php echo date("d M Y",strtotime($data['jadwalhari_tps']))?></p>
			<a href="edittps.php?id_tps=<?php echo $data['id_tps']?>" class="btn-edit">Edit Data</a>
			<a href="proses.php?i=hapustps&id_tps=<?php echo $data['id_tps']?>" class="btn-delete">DELETE TPS</a>
		</div>
			</section>
			<section>
		<h1>Tambah Saksi</h1>
		<form action="proses.php?i=tambahsaksi&id_tps=<?php echo $id_tps?>" method="POST">
			<label>Nama Saksi</label>
	<input type="text" name="nama" required>
	<label>
		Asal Partai
	</label>
	<select name="partai">
		<?php
		$partai = mysqli_query($koneksi,"SELECT * from partai");
		while ($datap = mysqli_fetch_array($partai)) {
			# code...
		

		?>
		<option value="<?php echo $datap['id_partai']?>"><img src="../images/<?php echo $datap['foto_partai']?>"><?php echo $datap['nama_partai']?></option>
		<?php
	}
	?>
	</select>
	<button class="login-btn" type="submit">Submit</button>
		</form>
	
</section>
<section id="daftarsaksi">
	<h1 class='text-title'>Daftar Saksi <?php echo $data['nama_tps']?></h1>
	<table style="width: 100%;border-collapse: collapse;">
		<tr>
			<th style="text-align:center;border:2px solid black">No</th>
			<th style="text-align:center;border:2px solid black">Nama Saksi</th>
			<th style="text-align:center;border:2px solid black">Asal Partai</th>
			<th style="text-align:center;border:2px solid black">Action</th>
		</tr>
		<?php
		$no = 1;
		$dftrsaksi = mysqli_query($koneksi,"SELECT * FROM saksi INNER JOIN partai ON saksi.id_partai=partai.id_partai INNER JOIN tps ON saksi.id_tps=tps.id_tps WHERE saksi.id_tps='$id_tps'");
		while ($dftrs = mysqli_fetch_array($dftrsaksi)) {
			# code...
		
		?>
		<tr style="text-align:center;border:2px solid black">
			<td style="text-align:center;border:2px solid black"><?php echo $no++?></td>
			<td style="text-align:center;border:2px solid black"><?php echo $dftrs['nama_saksi']?></td>
			<td style="text-align:center;border:2px solid black"><?php echo $dftrs['nama_partai']?></td>
			<td style="text-align:center;border:2px solid black">
				<a href="proses.php?i=editsaksi&id_saksi=<?php echo $dftrs['id_saksi']?>&id_tps=<?php echo $id_tps;?>" class="btn-edit">Edit</a>
				<a href="proses.php?i=deletesaksi&id_saksi=<?php echo $dftrs['id_saksi']?>&id_tps=<?php echo $id_tps;?>" onclick="return confirm('Apakah anda yakin?')" class="btn-delete">Delete</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
</section>
<section id="suara">
	<h1 class="text-title">Rekap Suara TPS, <?php echo $data['nama_tps']?></h1>
	<table>
		
		<tr>
			<?php 
		$nm=mysqli_query($koneksi,"SELECT * FROM partai");
		while ($datanm = mysqli_fetch_array($nm)) {
			$id_datapartai = $datanm['id_partai'];
			$datasuara = mysqli_query($koneksi,"SELECT * FROM suara WHERE id_partai='$id_datapartai' AND id_tps='$id_tps'");
			$ds = mysqli_fetch_array($datasuara);
		
		?>
			<td>
			<img src="../images/<?php echo $datanm['foto_partai']?>" height="32" class=>
				<p><?php echo $datanm['nama_partai']?></p>
				<p><b>Total Suara : </b>
					<?php 
					if ($ds['total_suara'] == "") {
						echo "Belum / Tidak ada Suara";
					} else {
						echo $ds['total_suara'];
					}
					?>
				</p>
				<p><b>Suara Sah : </b>
					<?php 
					if ($ds['jmlh_suarasah'] == "") {
						echo "Belum / Tidak ada Suara";
					} else {
						echo $ds['jmlh_suarasah'];
					}
					?>
				</p>
				<p><b>Suara Tidak Sah : </b>
					<?php 
					if ($ds['jmlh_suaratisah'] == "") {
						echo "Belum / Tidak ada Suara";
					} else {
						echo $ds['jmlh_suaratisah'];
					}
					?>
				</p>
			</td>
				<?php
	}
	?>
		</tr>
		<tr>
			<td> <b>Total Suara di TPS :</b>
				<?php
			$totalsuara = mysqli_query($koneksi,"SELECT sum(total_suara) as total_suara FROM suara WHERE id_tps='$id_tps'");
			$totalsum = mysqli_fetch_assoc($totalsuara);
			echo $totalsum['total_suara'];
			?>
				
			</td>
		</tr>
	
	</table>
	</table>
</section>
</div>







	
</body>
</html>