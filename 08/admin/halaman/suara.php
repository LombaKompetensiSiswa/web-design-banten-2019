Halaman Suara!
<hr>
<form name="forminputsuara" method="post" action="?isi=psuara">
	<table border="1" class="table">
		<thead>
			<tr>
				<td>No</td>
				<td>KECAMATAN</td>
				<td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php
			include"koneksi.php";
			$no=0;
			$tampil=mysqli_query($koneksi,"select * tb_tps group by kecataman");
			while($row=mysqli_fecth_array($tampil)){
			?>
			<tr>
				<td></td>
				<td></td>
				<td><a href="?isi=inputsuara">masuk</a></td>
			</tr>
		</tbody>
	</table>
</form>
