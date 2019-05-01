<?php
include 'header.php';
if ($_SESSION['status_user'] == '1' ) {
		echo "<script>alert ('Petugas Only ! !');window.location='index.php'</script>";
}
include '../config/koneksi.php';
	$id = $_GET['id_tps'];
?>
	<div class="content-index" style="padding-top: 5px;">
		<h1 class="text-center">Input Pemilih</h1>
	<form action="proses.php?i=tambahpemilih&id_tps=<?php echo $id?>" method="POST">
		<label>Nama Pemilih</label>
		<input type="text" name="pemilih">
		<label>Masukan Nik Pemilih</label>
		<input type="number" name="nik">

		<input type="submit" name="submit">
	</form>

	<section id="daftarpemilih">
		<table align="center" style="border-collapse: collapse;border:2px solid #308D8A;">
			<tr>
				<th style="border:2px solid #308D8A;">No</th>
				<th style="border:2px solid #308D8A;">Nama</th>
				<th style="border:2px solid #308D8A;">NIK</th>
				<th style="border:2px solid #308D8A;">Action</th>
			</tr>
			<?php
			$no=1;
			$sql = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE id_tps='$id'");
			$cek = mysqli_num_rows($sql);
			if ($cek < 1) {
				echo "Belum ada data";
			} else {
			while ($r = mysqli_fetch_array($sql)) {
				# code...
			
			?>
			<tr style="padding: 25pxborder:2px solid #308D8A;;">
				<td style="padding-left: 25px;padding-right: 25px;border:2px solid #308D8A;"><?php echo $no++?></td>
				<td style="padding-left: 25px;padding-right: 25px;border:2px solid #308D8A;"> <?php echo $r['nama_pemilih']?></td>
				<td style="padding-left: 25px;padding-right: 25px;border:2px solid #308D8A;"><?php echo $r['nik_pemilih']?></td>
				<td style="padding-left: 25px;padding-top:50px;padding-right: 25px;border:2px solid #308D8A;margin-bottom:">
					<a href="editpemilih.php?id_tps=<?php echo $id?>&id_pemilih=<?php echo $r['id_pemilih']?>" class="btn-edit">Edit</a>
					<a href="proses.php?i=deletepemilih&id_pemilih=<?php echo $r['id_pemilih']?>&id_tps=<?php echo $id?>" class="btn-delete">Delete </a>
				</td >
			</tr>
			<?php
		}
	}
		?>
		</table>
	</section>
</div>
</body>
</html>
