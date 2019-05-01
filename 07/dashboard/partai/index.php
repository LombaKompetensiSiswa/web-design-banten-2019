<div class="page-header">Data Partai</div>
<p>
    <a href="?open=Partai-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Partai</th>
                <th>Jumlah Anggota</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM partai") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaPartai']; ?></td>
                <td><?= $data['JumlahAnggota']; ?></td>
                <td>
                    <a href="?open=Partai-Edit&id=<?= $data['IDPartai']; ?>" class="btn btn-warning">Edit</a>
                    <a href="partai/hapus.php?id=<?= $data['IDPartai']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>