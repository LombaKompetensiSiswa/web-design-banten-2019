<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Setting User</h1>
	<section id="tambahuser">
		<h1>Tambah  User</h1>
		<form action="proses.php?i=tambahuser" method="POST">
			<label>Nama User</label>
			<input type="text" name="nama" required>
			<label>Username</label>
			<input type="text" name="username" required>
			<label>Password</label>
			<input type="password" name="password" max="15" required>
			<label>Status User</label>
			<select name="status">
				<option value="0">Petugas</option>
				<option value="1">Admin</option>
			</select>
			<input type="submit" name="submit">
		</form>
	</section>

	<section id="daftaruser">
		<h1>Daftar User</h1>
		<table>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Status User</th>
				<th>Action</th>
			</tr>
			<?php
			include '../config/koneksi.php';
			$no=1;
			$sql = mysqli_query($koneksi,"SELECT * FROM user ORDER BY nama_user ASC");
			while ($r = mysqli_fetch_array($sql)) {
				# code...
			
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $r['nama_user']?></td>
				<td><?php echo $r['username']?></td>
				<td>
					<?php
					if ($r['status_user'] == '0') {
						echo "Petugas";
					} else {
						echo "Admin";
					}
					?>
				</td>
				<td>
				<a href="edituser.php?id_user=<?php echo $r['id_user']?>">Edit</a>
				<a href="proses.php?i=deleteuser&id_user=<?php echo $r['id_user']?>">Hapus</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</section>
</body>
</html>