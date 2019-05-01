<div class="content">
    <div class="welcome text-center">
        <p class="text-brand">Berita Terbaru Kami</p>
    </div>
    <?php foreach($data as $value) { ?>
    <div class="news">
        <?=$value['name'];?><br/>
        <?=$value['date'];?><br/>
        <?=$value['content'];?><br/>
        <hr>
    </div>
    <?php } ?>
</div>