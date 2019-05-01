<?php
$valKategori = isset($select['KategoriTPS']) ? $select['KategoriTPS'] : '';
$valPemilih = isset($select['JumlahPemilih']) ? $select['JumlahPemilih'] : '';
$valSaksi = isset($select['JumlahSaksi']) ? $select['JumlahSaksi'] : '';
?>
<div class="form-group">
    <label for="KategoriTPS" class="control-label">Lokasi TPS</label>
    <input type="text" name="KategoriTPS" placeholder="Kategori TPS" class="form-control" required value="<?= $valKategori; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="JadwalPelaksanaan" class="control-label">Jadwal Pelaksanaan</label>
    <input type="date" name="JadwalPelaksanaan" class="form-control" required value="<?= date("Y-m-d"); ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="JumlahPemilih" class="control-label">Jumlah Pemilih</label>
    <input type="number" name="JumlahPilih" placeholder="Jumlah Pilih" class="form-control" required value="<?= $valPemilih; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="JumlahSaksi" class="control-label">Jumlah Saksi</label>
    <input type="number" name="JumlahSaksi" placeholder="Jumlah Saksi" class="form-control" required value="<?= $valSaksi; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <input type="submit" name="btnProses" value="<?= $button; ?>" class="btn btn-primary btn-block">
</div><!--penutup form-group-->