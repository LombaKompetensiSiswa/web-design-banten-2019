<?php
$valNama = isset($ambil['NamaPartai']) ? $ambil['NamaPartai'] : '';
$valAnggota = isset($ambil['JumlahAnggota']) ? $ambil['JumlahAnggota'] : '';
?>
<div class="form-group">
    <label for="NamaPartai" class="control-label">Nama Partai</label>
    <input type="text" name="NamaPartai" placeholder="Nama Partai" class="form-control" required value="<?= $valNama; ?>">
</div>
<div class="form-group">
    <label for="JumlahAnggota" class="control-label">Jumlah Anggota</label>
    <input type="number" name="JumlahAnggota" placeholder="Jumlah Anggota" class="form-control" required value="<?= $valAnggota; ?>">
</div>
<div class="form-group">
    <input type="submit" name="btnProses" value="<?= $button; ?>" class="btn btn-primary btn-block">
</div>