<div class="wrapper" id="dom_js">
    <?php if (isset($dom)):?>
        <?php foreach ($dom as $k => $v): ?>
            <ul id="<?= $v['id'] ?>"><div class="list_item"><p onclick="getDesc(<?= $v['id'] ?>, 0)" class="list"><?= $v['name'] ?> </p><span onclick="getData(<?= $v['id'] ?>)"><?= $v['count'] ? '+' : '' ?></span></div></ul>
        <?php endforeach; ?>
    <?php endif; ?>
</div>