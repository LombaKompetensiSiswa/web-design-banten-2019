
<?php
	$pemilih_id = isset($_GET['pemilih_id']) ? $_GET['pemilih_id'] : false;

	$pemilih= "";
	$status = "";
	$tps_id = "";
	$button = "Add";

	if($pemilih_id){
		$query = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE pemilih_id='$pemilih_id'");
		$row = mysqli_fetch_assoc($query);

		$pemilih = $row['pemilih'];
		$tps_id = $row['tps_id'];
		$status = $row['status'];
		$button = "Update";

	}
	?>

		<form action="<?php echo BASE."function/proses.php?action=pemilih&pemilih_id=$pemilih_id"; ?>" method="POST">
			<div class="element-form">
				<label>TPS</label>
				<select name="tps_id">

					<?php
						$tps = mysqli_query($koneksi, "SELECT * FROM tps ORDER BY tps ASC");
						while($row = mysqli_fetch_assoc($tps)){
							if($row[tps_id] == $tps_id){
							echo "<option value='$row[tps_id]' selected='true'>$row[tps]</option>";
						}

						else{
							echo "<option value='$row[tps_id]'>$row[tps]</option>";
						}
						}
						
					?>

				</select>
			</div>
			<div class="element-form">
				<label>Pemilih</label>
				<input type="text" placeholder="Ahmad" name="pemilih" autocomplete="off" required value="<?php echo $pemilih; ?>">
			</div>

			<div class="element-form">
				<label>Status</label>
				<span>
					<input type="radio"  autocomplete="off" required name="status" value="on" <?php if($status == "on"){echo "checked='true'";} ?> >On
					<input type="radio"  autocomplete="off" required name="status" value="off" <?php if($status == "off"){echo "checked='true'";} ?> >Off
				</span>
			</div>

			<div class="element-form">
				<input type="submit" value="<?php echo $button; ?>" name="button" class="btn-act">
			</div>
		</form>