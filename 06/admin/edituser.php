<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<section id="tambahuser">
		<h1>Edit  User</h1>
		<?php
		include '../config/koneksi.php';
		$id_user = $_GET['id_user'];
		$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user'");
		$r = mysqli_fetch_array($sql);
		?>
		<form action="proses.php?i=edituser&id_user=<?php echo $id_user?>" method="POST">
			<label>Nama User</label>
			<input type="text" value="<?php echo $r['nama_user']?>" name="nama" required>
			<label>Username</label>
			<input type="text" value="<?php echo $r['username']?>" name="username" required>
			<label>Password</label>
			<input type="password" value="<?php echo $r['password']?>" name="password" max="15" required>
			<label>Status User</label>
			<select name="status">
				<?php
				if ($r['status_user'] == '0') {
					echo '<option value="0">Petugas</option>';
				} else {
					echo '<option value="1">Admin</option>';
				}
				?>
				<option value="0">Petugas</option>
				<option value="1">Admin</option>
			</select>
			<input type="submit" name="submit">
		</form>
	</section>
</body>
</html>