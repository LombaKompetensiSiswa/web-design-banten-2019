<div class="page-header">Data Saksi</div>
<p>
    <a href="?open=Saksi-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>TPS</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM saksi, tps WHERE saksi.IDTps = tps.IDTps") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td><?= $data['JenisKelamin']; ?></td>
                <td><?= $data['NoTelepon']; ?></td>
                <td><?= $data['Alamat']; ?></td>
                <td><?= $data['KategoriTPS']; ?></td>
                <td>
                    <a href="?open=Saksi-Edit&id=<?= $data['IDSaksi']; ?>" class="btn btn-warning">Edit</a>
                    <a href="saksi/hapus.php?id=<?= $data['IDSaksi']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>                    
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</table>