<div class="page-header">Data Saksi Partai</div>
<p>
    <a href="?open=Saksi-Partai-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Partai</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM saksi_partai, partai WHERE saksi_partai.IDPartai = partai.IDPartai") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaPartai']; ?></td>
                <td>
                    <a href="?open=Saksi-Partai-Detail&id=<?= $data['IDSaksiPartai']; ?>" class="btn btn-primary">Detail</a>
                    <a href="saksi_partai/hapussaksi.php?id=<?= $data['IDSaksiPartai']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>