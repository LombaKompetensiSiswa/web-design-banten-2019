<div class="content">
    <div class="form">
        <p class="form-brand">Input Saksi</p>
        <form method="post">
            <input type="text" name="nik" class="form-content" placeholder="nik">
            <select name="kd_partai" class="form-content">
                <option value="">PILIH PARTAI</option>
                <?php foreach ($test as $value) { ?>
                    <option value="<?=$value['kd_partai']?>"><?=$value['nama']?></option>
                <?php } ?>
            </select>
            <select name="kd_tps" class="form-content">
                <option value="">PILIH TPS</option>
                <?php foreach ($tps as $value) { ?>
                    <option value="<?=$value['kd_tps']?>"><?=$value['nama']?></option>
                <?php } ?>
            </select>
            <button name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
