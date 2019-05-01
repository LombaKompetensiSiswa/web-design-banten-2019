<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM saksi_partai, partai WHERE saksi_partai.IDPartai = partai.IDPartai AND saksi_partai.IDSaksiPartai = '$kode'") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<div class="page-header">Detail Saksi Partai</div>
<table cellpadding="5" width="50%">
    <tr>
        <td>Kode Saksi Partai</td>
        <td>:</td>
        <td><?= $ambil['IDSaksiPartai']; ?></td>
    </tr>
    <tr>
        <td>Nama Partai</td>
        <td>:</td>
        <td><?= $ambil['NamaPartai']; ?></td>
    </tr>
</table>
<br>
<div class="page-header">Jumlah Saksi</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Saksi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM detail_saksi_partai, saksi WHERE detail_saksi_partai.IDSaksi = saksi.IDSaksi AND detail_saksi_partai.IDSaksiPartai = '$kode'") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>