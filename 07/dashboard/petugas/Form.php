<?php
$valNama = isset($ambil['NamaLengkap']) ? $ambil['NamaLengkap'] : '';
$valUsername = isset($ambil['Username']) ? $ambil['Username'] : '';
$valPassword = isset($ambil['password']) ? $ambil['password'] : '';

?>
<div class="form-group">
    <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
    <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" class="form-control" required value="<?= $valNama; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="Username" class="Username">Username</label>
    <input type="text" name="Username" placeholder="Username" class="form-control" required value="<?= $valUsername; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="Password" class="control-label">Password</label>
    <input type="password" name="password" placeholder="Password" class="form-control" required value="<?= $valPassword; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <input type="submit" name="btnProses" value="<?= $button; ?>" class="btn btn-primary btn-block">
</div><!--penutup form-group-->