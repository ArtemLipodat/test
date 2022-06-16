<div class="wrapper column" id="dom_js">
    <?php if (isset($dom)):?>
        <?php foreach ($dom as $k => $v): ?>
            <ul onclick="getData(<?= $v['id'] ?>)"><?= $v['name'] ?> <span><?= $v['count'] ? '+' : '' ?></span></ul>
            <?php if (isset($child)) : ?>
                <ol>
                    <?php foreach ($child as $key => $val) : ?>
                        <li onclick="getData(<?= $val['id'] ?>)"><?= $val['name'] ?> <span><?= !empty($childCount[$val['id']]['count']) ? '+' : '' ?></span></li>
                    <?php endforeach; ?>
                </ol>
            <?php endif;?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>