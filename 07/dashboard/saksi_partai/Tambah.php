<div class="page-header">Tambah data saksi partai</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Saksi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM saksi") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td>
                    <a href="saksi_partai/pilih.php?id=<?= $data['IDSaksi']; ?>" class="btn btn-warning">Pilih Saksi</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
<br>
<?php
$cek = mysqli_query($koneksi, "SELECT * FROM saksi_partai ORDER BY IDSaksiPartai DESC") or die ("query error");
if(mysqli_num_rows($cek) > 0)
{
    $IDSaksiPartai = customKode($koneksi, 'SP','IDSaksiPartai','saksi_partai','2','3','03');
}
else
{
    $IDSaksiPartai = "SP001";
}
?>
<div class="page-header">Check Saksi</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Saksi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM detail_saksi_partai, saksi WHERE detail_saksi_partai.IDSaksi = saksi.IDSaksi AND detail_saksi_partai.IDSaksiPartai = '$IDSaksiPartai'") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td>
                    <a href="saksi_partai/hapus.php?id=<?= $data['IDSaksi']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
<br>
<form method="POST">
<div class="page-header">Partai</div>
<div class="form-group">
    <select name="IDPartai" class="form-control" required>
        <option value="">Pilih Partai</option>
        <?php
        $mysql = mysqli_query($koneksi, "SELECT * FROM partai") or die ("query error");
        while($data = mysqli_fetch_array($mysql)){
        ?>
        <option value="<?= $data['IDPartai']; ?>"><?= $data['NamaPartai']; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-primary btn-block">
</div>
</form>

<?php
if(isset($_POST['btnSimpan']))
{
    $IDSaksiPartai = $IDSaksiPartai;
    $partai = $_POST['IDPartai'];

    $mysql = mysqli_query($koneksi, "INSERT INTO saksi_partai VALUES('$IDSaksiPartai','$partai')") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Saksi partai berhasil ditambahkan!');</script>";
        echo "<script>document.location='?open=Saksi-Partai';</script>";
    }
}
?>