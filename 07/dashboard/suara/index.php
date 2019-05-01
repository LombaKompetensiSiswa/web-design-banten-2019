<div class="page-header">Input Suara</div>
<?php
$cekin = mysqli_query($koneksi, "SELECT * FROM rekap ORDER BY IDRekap DESC") or die ("query error");

if(mysqli_num_rows($cekin) > 0)
{
    $IDRekap = customKode($koneksi, 'REKAP','IDRekap','rekap','5','5','05');
}
else
{
    $IDRekap = "REKAP00001";
}
?>
<form method="POST">
<table cellpadding="5" width="100%">
    <tr>
        <td>Partai</td>
        <td>:</td>
        <td>
            <select name="IDPartai" class="form-control" required>
                <option value="">Pilih Partai</option>
                <?php
                $mysql = mysqli_query($koneksi, "SELECT * FROM partai") or die ("query error");
                while($data = mysqli_fetch_array($mysql)){ 
                ?>
                <option value="<?= $data['IDPartai']; ?>"><?= $data['NamaPartai']; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Suara ( SAH )</td>
        <td>:</td>
        <td>
            <input type="number" name="SuaraSah" placeholder="Suara Sah" required class="form-control">
        </td>
    </tr>
    <tr>
        <td>Suara ( Tidak SAH )</td>
        <td>:</td>
        <td>
            <input type="number" name="SuaraTidakSah" placeholder="Suara Tidak SAH" required class="form-control">
        </td>
    </tr>
</table>
<div class="form-group">
    <input type="submit" name="btnSimpan" value="Simpan" class="btn btn-warning btn-block">
</div>
</form>
<?php
if(isset($_POST['btnSimpan']))
{
    $Partai = $_POST['IDPartai'];
    $suaraSah = $_POST['SuaraSah'];
    $suaraTidakSah = $_POST['SuaraTidakSah'];

    $mysql = mysqli_query($koneksi, "INSERT INTO detail_rekap VALUES('$IDRekap','$Partai','$suaraSah','$suaraTidakSah')");
    header("location:?open=Input-Suara");
}
?>
<div class="page-header">Check Suara</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>IDSuara</th>
                <th>Nama Partai</th>
                <th>Suara ( SAH )</th>
                <th>Suara ( Tidak SAH )</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $mysql = mysqli_query($koneksi, "SELECT * FROM detail_rekap, partai WHERE detail_rekap.IDPartai = partai.IDPartai AND detail_rekap.IDRekap = '$IDRekap'") or die ("query error");
        while($data = mysqli_fetch_array($mysql)){
        ?>
        <tbody>
            <tr>
                <td><?= $data['IDRekap']; ?></td>
                <td><?= $data['NamaPartai']; ?></td>
                <td><?= $data['SuaraSah']; ?></td>
                <td><?= $data['SuaraTidakSah']; ?></td>
                <td>
                    <a href="suara/hapus.php?id=<?= $data['IDRekap']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div><!--penutup table-responsive-->
<form method="POST">
<div class="form-group">
    <input type="submit" name="btnLaporkan" value="Laporkan" class="btn btn-danger btn-block">
</div>
</form>
<?php
if(isset($_POST['btnLaporkan']))
{
    $partai = mysqli_query($koneksi, "SELECT * FROM detail_rekap WHERE IDRekap = '$IDRekap'") or die ("query error");
    $ambil = mysqli_fetch_array($partai);

    $jumlahSuara = $ambil['SuaraSah'] + $ambil['SuaraTidakSah'];

    $IDRekap = $IDRekap;
    $IDUser = $_SESSION['IDUser'];
    $tanggal = date("Y-m-d");
    $IDPartai = $ambil['IDPartai'];
    $TotalSuara = $jumlahSuara;
    $status = "Selesai";

    $mysql = mysqli_query($koneksi, "INSERT INTO rekap VALUES('$IDRekap','$IDUser','$tanggal','$IDPartai','$TotalSuara','$status')") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Pelaporan data berhasil!');</script>";
        echo "<script>document.location='?open=Input-Suara';</script>";
    }
}
?>