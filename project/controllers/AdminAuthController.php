<?php
/*Created by Artem (16.06.2022 12:19)*/

namespace Project\Controllers;
use \Core\Controller;
use Project\Models\AdminAuth;

class AdminAuthController extends Controller {

    function index() {
        $this->title = 'Ошибка Авторизации';
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        if (strlen($login) == 0 || strlen($login) > 90) {
            $error = "Недопустимый логин";
            return $this->render('admin/error', ['error'=> $error, 'href' => '/auth']);
        } elseif (strlen($pass) == 0 || strlen($login) > 10) {
            $error = "Недопустимый Пароль";
            return $this->render('admin/error', ['error'=> $error, 'href' => '/auth']);
        }

        $pass = md5($pass . 'test');

        $model = new AdminAuth();
        $user = $model->getUser($login,$pass);

        if (count($user) > 0) {
            setcookie('user', $user['name'], time() + 3600, '/');
            header('Location: /admin/show');
        }
    }

}