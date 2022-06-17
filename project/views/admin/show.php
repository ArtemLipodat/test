<div class="wrapper column">
    <h2>Привет, <?= $user ?> !</h2>
    <div style="display: flex; align-items: center; width: 50%; justify-content: space-around">
        <a href="/admin/form">Добавить</a>
        <a href="/admin/delete">Удалить</a>
    </div>
    <br>
    <?php if (isset($succses)) : ?>
    <span><?= $succses ?></span>
    <?php endif; ?>
</div>