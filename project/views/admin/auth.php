<div class="wrapper column">
    <h2>Авторизация</h2>
    <?php if (isset($error)): ?>
    <span><?= $error ?></span>
    <?php endif; ?>
    <form class="form" action="auth/check" method="post">
        <input type="text" name="login" id="login" placeholder="Логин">
        <input type="password" name="pass" id="pass" placeholder="Пароль">
        <input type="submit" value="Авторизоватся">
    </form>
</div>
