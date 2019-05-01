<div class="page-header">Data Pemilih</div>
<p>
    <a href="?open=Pemilih-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>TPS</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM pemilih, tps WHERE pemilih.IDTps = tps.IDTps") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td><?= $data['NIP']; ?></td>
                <td><?= $data['JenisKelamin']; ?></td>
                <td><?= $data['KategoriTPS']; ?></td>
                <td>
                    <a href="?open=Pemilih-Edit&id=<?= $data['IDPemilih']; ?>" class="btn btn-warning">Edit</a>
                    <a href="pemilih/hapus.php?id=<?= $data['IDPemilih']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>