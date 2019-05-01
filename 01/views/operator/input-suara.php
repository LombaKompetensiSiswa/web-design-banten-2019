<div class="content">
    <div class="form">
        <img src="public/img/vote.png" class="form-img" alt="vote">
        <p class="form-brand">Input Suara</p>
        <form method="post">
            <input type="text" class="form-content" name="nik" placeholder="nik">
            <select name="kd_partai" class="form-content">
                <option value="">PILIH SUARA</option>
                <option value="0">TIDAK SAH</option>
                <?php foreach ($test as $value) { ?>
                    <option value="<?=$value['kd_partai']?>"><?=$value['nama']?></option>
                <?php } ?>
            </select>
            <button name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>