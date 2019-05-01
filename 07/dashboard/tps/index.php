<div class="page-header">Data TPS</div><!--penutup page-header-->
<p>
    <a href="?open=TPS-Tambah" class="btn btn-primary">Tambah Data</a>
</p>
<div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi TPS</th>
                <th>Jadwal Pelaksanaan</th>
                <th>Jumlah Pemilih</th>
                <th>Jumlah Saksi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 0;
        $mysql = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
        while($data = mysqli_fetch_array($mysql))
        {
            $no++;
        ?>
        <tbody>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data['KategoriTPS']; ?></td>
                <td><?= $data['JadwalPelaksanaan']; ?></td>
                <td><?php if($data['JumlahPemilih'] == 0){ echo "Penuh";}else{ echo $data['JumlahPemilih'];}?></td>
                <td><?php if($data['JumlahSaksi'] == 0){ echo "Penuh";}else{ echo $data['JumlahSaksi'];}?></td>
                <td>
                    <a href="?open=TPS-Edit&id=<?= $data['IDTps']; ?>" class="btn btn-warning">Edit</a>
                    <a href="tps/hapus.php?id=<?= $data['IDTps']; ?>" class="btn btn-danger" onclick="return attention('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>    
</div><!--penutup table-responsive-->