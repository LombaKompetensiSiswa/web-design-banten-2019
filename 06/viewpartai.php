<?php
include 'config/koneksi.php';
include 'header.php';
$id_partai=$_GET['id_partai'];
$sql = mysqli_query($koneksi,"SELECT * FROM partai WHERE id_partai='$id_partai'");
$data = mysqli_fetch_array($sql);
?>
<section>
	<h1 class="text-title mt-5">Info Detail <?php echo $data['nama_partai']?></h1>

		<table style="width: 100%">
			<tr>
				<td align="center">
					<div class="card" align="center">
						<img src="images/<?php echo $data['foto_partai']?>" class="img-responsive">
						<h1 class="text-title mt-5"><?php echo $data['nama_partai']?></h1>
					</div>
				</td>
			</tr>
		</table>
</section>

<section>
	<h1 class="text-title mt-5">Daftar Saksi</h1>
	<div align="center">	
		<table style="width: 80%;border-collapse: collapse;border:2px solid black">
			<tr style="border-collapse: collapse;border:2px solid black">
				<th class="text-center" style="border-collapse: collapse;border:2px solid black">No</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Nama</th>
			</tr>
			<?php
			$no = 1;
			$saksi = mysqli_query($koneksi,"SELECT * FROM saksi  WHERE id_partai='$id_partai'");
			while ($ds = mysqli_fetch_array($saksi)) {
				# code...
			
			?>
			<tr  style="border-collapse: collapse;border:2px solid black" class="text-center">
				<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $no++?></td>
				<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nama_saksi']?></td>
			</tr>
			<?php
		}
		?>
		</table>
	</div>

</section>
<section>
	<h1 class="text-title mt-5">Perolehan Suara</h1>
	<div align="center">	
		<table style="width: 80%;border-collapse: collapse;border:2px solid black">
			<tr style="border-collapse: collapse;border:2px solid black">
				<th class="text-center" style="border-collapse: collapse;border:2px solid black">No</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Suara Sah</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Suara Tidak Sah</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Nama TPS</th>
			</tr>
			<?php
			$no = 1;
			$saksi = mysqli_query($koneksi,"SELECT * FROM suara INNER JOIN tps ON suara.id_tps=tps.id_tps WHERE id_partai=
				'$id_partai'");
			$total = mysqli_query($koneksi,"SELECT sum(jmlh_suarasah) as total FROM suara WHERE id_partai='$id_partai'");
			$dt = mysqli_fetch_assoc($total);
			while ($ds = mysqli_fetch_array($saksi)) {
				# code...
			
			?>
			<tr  style="border-collapse: collapse;border:2px solid black" class="text-center">
				<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $no++?></td>
				<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['jmlh_suarasah']?></td>
			<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['jmlh_suaratisah']?></td>
				<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nama_tps']?></td>
			</tr>
			<td colspan="3" class="text-center" style="border-collapse: collapse;border:2px solid black">Jumlah Total</td>
			<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $dt['total']?></td>
			<?php
		}
		?>
		</table>
</section>
<?php
include 'footer.php';
?>