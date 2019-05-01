<div class="page-header">Data Petugas</div><!--penutup page-header-->
<p> 
    <a href="?open=Petugas-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Akses</th>
                <th>Opsi</th>
            </tr>   
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM akun WHERE level = 'petugas'") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['NamaLengkap']; ?></td>
                <td><?= $data['Username']; ?></td>
                <td><?= $data['level']; ?></td>
                <td>
                    <a href="?open=Petugas-Edit&id=<?= $data['IDUser']; ?>" class="btn btn-warning">Edit</a>   
                    <a href="petugas/hapus.php?id=<?= $data['IDUser']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin mengahapus data petugas')">Hapus</a>                  
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table><!--penutup table-style-->
</div><!--penutup table-responsive-->