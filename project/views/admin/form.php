<div class="wrapper column">
    <h2>Добавление</h2>
    <form class="form" action="/admin/add" method="post">
        <input type="text" name="name" id="name" placeholder="Имя">
        <input type="text" name="desc" id="desc" placeholder="Описание">
        <br>

        <?php if (isset($dom)): ?>
            <label for="dom"> Раздел
                <select name="dom" id="dom">
                    <option value="0">Выбрать...</option>
                    <?php foreach ($dom as $k => $v): ?>
                    <option value="<?= $v['id'] ?>">Добавить в <?= $v['name'] ?></option>
                    <?php endforeach;?>
                </select>
            </label>
        <?php endif; ?>
        <br>

        <?php if (isset($dom_child)): ?>
            <label for="dom_child"> Подразделы
                <select name="dom_child" id="dom_child">
                    <option value="0">Выбрать...</option>
                    <?php foreach ($dom_child as $k => $v): ?>
                        <option value="<?= $v['id'] ?>">Добавить в <?= $v['name'] ?></option>
                    <?php endforeach;?>
                </select>
            </label>
        <?php endif; ?>
        <input type="submit" value="Добавить">
    </form>
</div>