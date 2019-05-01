

<div class="add-form">
		<a class="btn-act right" href="<?php echo BASE."dashboard.php?module=pemilih&action=form"; ?>">+ Tambah Pemilih</a>
</div>
<?php 

	$query = mysqli_query($koneksi, "SELECT pemilih.*, tps.tps FROM pemilih JOIN tps ON pemilih.tps_id = tps.tps_id");

	if(mysqli_num_rows($query) == 0){
		echo "maaf, data belum ada";
	}

	else{
		echo "<table class='table-list'>";
		echo "<tr class='baris-title'>
				<th class='no'>NO</th>
				<th class='kiri'>Pemilih</th>
				<th class='kiri'>Tps</th>
				<th class='tengah'>Status</th>
				<th class='kanan'>Action</th>
			 </tr>";

			 $no =1;
			 while($row = mysqli_fetch_assoc($query)){
			 	echo "
			 		<tr>
			 		<td class='no'>$no</td>
			 		  <td class='kiri'>$row[pemilih]</td>
			 		  <td class='kiri'>$row[tps]</td>
			 		  <td class='tengah'>$row[status]</td>
			 		  <td class='kanan'>
			 		  	<a href='".BASE."delete.php?action=pemilih&pemilih_id=$row[pemilih_id]' class='btn-act'>Delete</a>

			 		  	<a href='".BASE."dashboard.php?module=pemilih&action=form&pemilih_id=$row[pemilih_id]' class='btn-act'>Update</a>
			 		  </td>
			 		  </tr>
			 	";

			 	$no++;
			 }
		echo "</table>";
	}