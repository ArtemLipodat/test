<div class="wrapper column">
    <h2>Удаление</h2>
    <form class="form" action="/admin/delete/check" method="post">
        <?php if (isset($dom)): ?>
            <label for="dom"> Раздел
                <select name="dom" id="dom">
                    <option value="0">Выбрать...</option>
                    <?php foreach ($dom as $k => $v): ?>
                        <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
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
                        <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                    <?php endforeach;?>
                </select>
            </label>
        <?php endif; ?>
        <input type="submit" value="Удалить">
    </form>
</div>