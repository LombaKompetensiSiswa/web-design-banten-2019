<div class="content">
    <div class="form">
        <img src="public/img/vote.jpg" class="form-img" alt="pemilih">
        <center><p class="form-brand">Daftar Pemilih</p></center>
        <a href="?page=input-pemilih" class="input-link">Input Pemilih</a>
        <table>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>KECAMATAN</th>
            </tr>
            <?php foreach ($pemilih as $value) { ?>
            <tr>
                <td><?=$value['nik']?></td>
                <td><?=$value['nama']?></td>
                <td><?=$value['alamat']?></td>
                <td><?=$value['kecamatan']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>