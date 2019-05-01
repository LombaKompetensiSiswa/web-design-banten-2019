<div class="page-header">Detail Hasil Suara</div>
<?php
$kode = $_GET['id'];

$mysql = mysqli_query($koneksi, "SELECT * FROM rekap, akun, partai, detail_rekap WHERE rekap.IDUser = akun.IDUser AND rekap.IDPartai = partai.IDPartai AND rekap.IDRekap = '$kode'") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<table cellpadding="5" width="50%">
    <tr>
        <td>Kode Rekap</td>
        <td>:</td>
        <td><?= $ambil['IDRekap']; ?></td>
    </tr>
    <tr>
        <td>Tanggal Rekap</td>
        <td>:</td>
        <td><?= $ambil['TanggalRekap']; ?></td>
    </tr>
    <tr>
        <td>Nama Petugas</td>
        <td>:</td>
        <td><?= $ambil['NamaLengkap']; ?></td>
    </tr>
    <tr>
        <td>Nama Partai</td>
        <td>:</td>
        <td><?= $ambil['NamaPartai']; ?></td>
    </tr>
    <tr>
        <td>Jumlah Suara</td>
        <td>:</td>
        <td><?= $ambil['JumlahSuara']; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td><?= $ambil['Status']; ?></td>
    </tr>
</table>
<br>
<div class="page-header">Rincian Perhitungan</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Partai</th>
                <th>JumlahSuara</th>
                <th>Suara Sah</th>
                <th>Suara Tidak Sah</th>
                <th>Presentase Suara Sah</th>
                <th>Presentase Suara Tidak Sah</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM detail_rekap, partai WHERE detail_rekap.IDPartai = partai.IDPartai AND detail_rekap.IDRekap = '$kode'") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
            $suaraResmi = ($data['SuaraSah'] / $ambil['JumlahSuara']) * 100;
            $suaraNonResmi = ($data['SuaraTidakSah'] / $ambil['JumlahSuara']) * 100;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaPartai']; ?></td>
                <td><?= $ambil['JumlahSuara']; ?></td>
                <td><?= $data['SuaraSah']; ?></td>
                <td><?= $data['SuaraTidakSah']; ?></td>
                <td><?= ceil($suaraResmi); ?>%</td>
                <td><?= ceil($suaraNonResmi); ?>%</td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>