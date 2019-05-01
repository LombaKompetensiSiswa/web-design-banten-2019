<div class="page-header">Rekap Hasil Perhitungan Suara</div>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Rekap</th>
                <th>Tanggal Rekap</th>
                <th>Nama Petugas</th>
                <th>Nama Partai</th>
                <th>Prensentase</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM rekap, akun, partai, detail_rekap WHERE rekap.IDUser = akun.IDUser AND rekap.IDPartai = partai.IDPartai AND rekap.IDRekap = detail_rekap.IDRekap") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
            $persentase = ($data['SuaraSah'] / $data['JumlahSuara']) * 100;
        ?>
        <tbody>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['IDRekap']; ?></td>
                <td><?= $data['TanggalRekap']; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td><?= $data['NamaPartai']; ?></td>
                <td><?= ceil($persentase); ?>%</td>
                <td><?= $data['Status']; ?></td>
                <td>
                    <a href="?open=Rekap-Detail&id=<?= $data['IDRekap']; ?>" class="btn btn-primary">Detail</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>