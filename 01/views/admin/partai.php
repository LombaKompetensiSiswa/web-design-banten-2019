<div class="content">
    <div class="form">
        <img src="public/img/group.jpg" class="form-img" alt="">
        <center><p class="form-brand">Daftar partai</p></center>
        <a href="?page=tambah-partai" class="input-link">Tambah Partai</a>
        <table>
            <tr>
                <th>NO</th>
                <th>NAMA PARTAI</th>
            </tr>
            <?php foreach ($partai as $value) {?>
            <tr>
                <td><?=$x?></td>
                <td><?=$value['nama']?></td>
            </tr>
            <?php $x++;} ?>
        </table>
    </div>
</div>