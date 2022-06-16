<?php

namespace Project\Controllers;
use \Core\Controller;
use Project\Models\AdminRegister;

class AdminRegisterController extends Controller {

    function index() {
        $this->title = 'Ошибка регистрации';
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

        if (strlen($login) < 5 || strlen($login) > 90) {
            $error = "Недопустимый логин";
            return $this->render('admin/error', ['error'=> $error, 'href' => '/reg']);
        } elseif (strlen($name) < 3 || strlen($login) > 50) {
            $error = "Недопустимое имя";
            return $this->render('admin/error', ['error'=> $error, 'href' => '/reg']);
        } elseif (strlen($pass) < 2 || strlen($login) > 10) {
            $error = "Недопустимый Пароль";
            return $this->render('admin/error', ['error'=> $error, 'href' => '/reg']);
        }

        $pass = md5($pass . 'test');

        $sql = "INSERT INTO `user_admin` (`login`, `pass`, `name` ) VALUES ('$login', '$pass', '$name')";

        $succses = $this->add($sql)->insert_id;

        if ($succses) {
            setcookie('user', $name, time() + 3600, '/');
            header('Location: /admin/show');
        }
    }

    function add($sql){
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        return $con;
    }

}
