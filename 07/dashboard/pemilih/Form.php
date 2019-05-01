<?php
$valNama = isset($ambil['NamaLengkap']) ? $ambil['NamaLengkap'] : '';
$valNIP = isset($ambil['NIP']) ? $ambil['NIP'] : '';
$valJenisKelamin = isset($ambil['JenisKelamin']) ? $ambil['JenisKelamin'] : '';
$valTPS = isset($ambil['IDTps']) ? $ambil['IDTps'] : '';
?>
<div class="form-group">
    <label for="NamaLengkap" class="control-label">Nama Lengkap</label>
    <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" class="form-control" required value="<?= $valNama; ?>">
</div>
<div class="form-group">
    <label for="NIP" class="control-label">NIP</label>
    <input type="number" name="NIP" placeholder="NIP" class="form-control" required value="<?= $valNIP; ?>">
</div>
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
</div>
<div class="form-group">
    <label for="IDTps" class="control-label">TPS</label>
    <select name="IDTps" class="form-control" required>
        <option value="">Pilih TPS</option>
        <?php
        $mysql = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            if($data['IDTps'] == $valTPS)
            {
                $cek = "selected";
            }
            else
            {
                $cek = "";
            }
        ?>
        <option value="<?= $data['IDTps']; ?>" <?= $cek; ?>><?= $data['KategoriTPS']; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <input type="submit" name="btnProses" value="<?= $button; ?>" class="btn btn-primary btn-block">
</div>