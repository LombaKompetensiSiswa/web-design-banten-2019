<div class="content">
    <div class="form">
        <img src="public/img/saksi.jpg" class="form-img" alt="">
        <center><p class="form-brand">Daftar Saksi</p></center>
        <a href="?page=input-saksi" class="input-link">Input Saksi</a>
        <table>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>PARTAI</th>
                <th>TPS</th>
                <th>KECAMATAN</th>
            </tr>
            <?php foreach ($data as $value) { ?>
            <tr>
                <td><?=$value['nik']?></td>
                <td><?=$value['nama']?></td>
                <td><?=$value['partai']?></td>
                <td><?=$value['tps']?></td>
                <td><?=$value['kecamatan']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>