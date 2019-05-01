<?php
include 'config/koneksi.php';
include 'header.php';
$id_tps=$_GET['id_tps'];
$sql = mysqli_query($koneksi,"SELECT * FROM tps WHERE id_tps='$id_tps'");
$data = mysqli_fetch_array($sql);
?>
<section>
	<h1 class="text-title mt-5">Info Detail <?php echo $data['nama_tps']?></h1>

		<table style="width: 100%">
			<tr>
				<td align="center">
					<div class="card" align="center">
						<img src="images/kotaksuara.png" class="img-responsive">
						<h1 class="text-title mt-5"><?php echo $data['nama_tps']?></h1>
						<p><b>Lokasi : </b><?php echo $data['lokasi_tps']?></p>
						<p><b>Jadwal : </b><?php echo date("H:i",strtotime($data['jadwalwaktu_tps']))?>, <?php echo date("d M Y",strtotime($data['jadwalhari_tps']))?></p>
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
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Nama Saksi</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Nama Partai</th>
			</tr>
			<?php
			$no = 1;
			$saksi = mysqli_query($koneksi,"SELECT * FROM saksi INNER JOIN partai ON saksi.id_partai=partai.id_partai  WHERE id_tps='$id_tps'");
			while ($ds = mysqli_fetch_array($saksi)) {
				# code...
			
			?>
			<tr  style="border-collapse: collapse;border:2px solid black" class="text-center">
				<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $no++?></td>
				<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nama_saksi']?></td>
				<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nama_partai']?></td>
			</tr>
			<?php
		}
		?>
		</table>
	</div>

</section>
<section>
	<h1 class="text-title mt-5">Daftar Pemilih</h1>
	<div align="center">	
		<table style="width: 80%;border-collapse: collapse;border:2px solid black">
			<tr style="border-collapse: collapse;border:2px solid black">
				<th class="text-center" style="border-collapse: collapse;border:2px solid black">No</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">Nama</th>
				<th  class="text-center" style="border-collapse: collapse;border:2px solid black">NIK</th>
			</tr>
			<?php
			$no = 1;
			$pemilih = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE id_tps='$id_tps' LIMIT 25");
			while ($ds = mysqli_fetch_array($pemilih)) {
				# code...
			
			?>
			<tr  style="border-collapse: collapse;border:2px solid black" class="text-center">
				<td  class="text-center" style="border-collapse: collapse;border:2px solid black"><?php echo $no++?></td>
				<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nama_pemilih']?></td>
			<td class="text-center"  style="border-collapse: collapse;border:2px solid black"><?php echo $ds['nik_pemilih']?></td>
			</tr>
			<?php
		}
		?>
		</table>
</section>
<?php
include 'footer.php';
?>