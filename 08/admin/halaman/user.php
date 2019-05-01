Halaman User!
<hr>
<form name="forminputuser" method="post" action="?isi=puser">
	<input type="hidden" name="iduser">
	<label>Nama Lengkap</label><br>
	<input type="text" name="namalengkap" class="form-control"><br>
	<label>Username</label><br>
	<input type="text" name="username" class="form-control"><br>
	<label>Password</label><br>
	<input type="password" name="password" class="form-control"><br>
	<label>Level</label><br>
	<select name="level" class="form-control">
		<option>-Pilih-
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
		</option>
	</select><br>
	<label>Status</label><br>
	<select name="status" class="form-control">
		<option>-Pilih-
			<option value="Y">Aktiv</option>
			<option value="N">Non Aktiv</option>
		</option>
	</select><p>

	<button name="simpan" class="btn btn-primary">SIMPAN</button>
</form>
<table class="table" border="1">
	<thead>
		<tr>
			<td>ID user</td>
			<td>Nama lengkap</td>
			<td>Username</td>
			<td>Password</td>
			<td>Level</td>
			<td>Status</td>
			<td>Opsi</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>