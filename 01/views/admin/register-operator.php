<div class="content">
    <div class="form">
        <form method="post">
            <input type="text" class="form-content" name="nik" value="<?=$nik?>" placeholder="nik">
            <input type="text" class="form-content" name="nama" value="<?=$nama?>" placeholder="nama">
            <input type="password" class="form-content" name="password" placeholder="password">
            <select name="kd_tps" class="form-content">
                <option value="">PILIH TPS</option>
                <?php foreach ($tps as $value) { ?>
                    <option value="<?=$value['kd_tps']?>"><?=$value['nama']?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-success" name="submit">Register</button>
        </form>
    </div>
</div>
