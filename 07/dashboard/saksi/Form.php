<?php
$valNama = isset($ambil['NamaLengkap']) ? $ambil['NamaLengkap'] : '';
$valJenisKelamin = isset($ambil['JenisKelamin']) ? $ambil['JenisKelamin'] : '';
$valNoTelepon= isset($ambil['NoTelepon']) ? $ambil['NoTelepon'] : '';
$valAlamat = isset($ambil['Alamat']) ? $ambil['Alamat'] : '';
$valTps = isset($ambil['IDTps']) ? $ambil['IDTps'] : '';
?>
<div class="form-group">
    <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
    <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" class="form-control" required value="<?= $valNama; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="JenisKelamin" class="control-label">Jenis Kelamin</label>
    <select name="JenisKelamin" class="form-control" required>
        <option value="">Pilih Jenis Kelamin</option>
        <?php
        $data = ['Laki - Laki','Perempuan'];
        foreach($data as $jenis)
        {
            if($jenis == $valJenisKelamin)
            {
                $cek = "selected";
            }
            else
            {
                $cek = "";
            }
        ?>
        <option value="<?= $jenis; ?>" <?= $cek; ?>><?= $jenis; ?></option>
        <?php } ?>
    </select>
</div><!--penutup form-group-->
<div class="form-group">
    <label for="NoTelepon" class="control-label">No Telepon</label>
    <input type="number" name="NoTelepon" placeholder="No Telepon" class="form-control" required value="<?= $valNoTelepon; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="Alamat" class="control-label">Alamat</label>
    <input type="text" name="Alamat" placeholder="Alamat" class="form-control" required value="<?= $valAlamat; ?>">
</div><!--penutup form-group-->
<div class="form-group">
    <label for="TPS" class="control-label">TPS</label>
    <select name="IDTps" class="form-control" required>
        <option value="">Pilih TPS</option>
        <?php
        $mysql = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
        while($data = mysqli_fetch_array($mysql)){
            if($data['IDTps'] == $valTps)
            {
                $cek = "selected";
            }
            else
            {
                $cek = "";
            }
        ?>
        <option Value="<?= $data['IDTps']; ?>" <?= $cek; ?>><?= $data['KategoriTPS']; ?></option>
        <?php } ?>
    </select>
</div><!--penutup form-group-->
<div class="form-group">
    <input type="submit" name="btnProses" value="<?= $button; ?>" class="btn btn-primary btn-block">
</div><!--penutup form-group-->