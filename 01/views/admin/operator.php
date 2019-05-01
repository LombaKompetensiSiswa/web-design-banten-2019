<div class="content">
    <div class="form">
        <img src="public/img/sales.png" class="form-img" alt="pemilih">
        <center><p class="form-brand">Input Operator</p></center>
        <table>
            <tr>
                <th>NIK</th>
                <th>Nama Operator</th>
                <th>Action</th>
            </tr>
            <?php foreach ($pemilih as $value) { ?>
            <tr>
                <td><?=$value['nik']?></td>
                <td><?=$value['nama']?></td>
                <td><a href="?page=register-operator&nik=<?=$value['nik']?>">Tambah</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
