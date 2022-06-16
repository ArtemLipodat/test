<div class="wrapper column">
    <h2>Привет, <?= $user ?> !</h2>
    <a href="/admin/form">Добавить</a>
    <br>
    <?php if (isset($succses)) : ?>
    <span><?= $succses ?></span>
    <?php endif; ?>
</div>