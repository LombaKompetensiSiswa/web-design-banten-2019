

<div class="add-form">
		<a class="btn-act right" href="<?php echo BASE."dashboard.php?module=user&action=form"; ?>">+ Tambah User</a>
</div>
<?php 

	$query = mysqli_query($koneksi, "SELECT * FROM user");

	if(mysqli_num_rows($query) == 0){
		echo "maaf, data belum ada";
	}

	else{
		echo "<table class='table-list'>";
		echo "<tr class='baris-title'>
				<th class='no'>NO</th>
				<th class='kiri'>user</th>
				<th class='kiri'>Email</th>
				<th class='tengah'>Level</th>
				<th class='tengah'>Status</th>
				<th class='kanan'>Action</th>
			 </tr>";

			 $no =1;
			 while($row = mysqli_fetch_assoc($query)){
			 	echo "
			 		<tr>
			 		<td class='no'>$no</td>
			 		  <td class='kiri'>$row[user]</td>
			 		  <td class='kiri'>$row[email]</td>
			 		   <td class='tengah'>$row[level]</td>
			 		  <td class='tengah'>$row[status]</td>
			 		  <td class='kanan'>
			 		  	<a href='".BASE."delete.php?action=user&user_id=$row[user_id]' class='btn-act'>Delete</a>

			 		  	<a href='".BASE."dashboard.php?module=user&action=form&user_id=$row[user_id]' class='btn-act'>Update</a>
			 		  </td>
			 		  </tr>
			 	";

			 	$no++;
			 }
		echo "</table>";
	}