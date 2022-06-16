<?php

namespace Project\Controllers;
use \Core\Controller;

class AdminController extends Controller{

    function admin() {
        $this->title = 'Страница Авторизации/Регистрации';
        return $this->render('admin/admin');
    }

    function auth() {
        $this->title = 'Авторизация';
        return $this->render('admin/auth');
    }

    function reg() {
        $this->title = 'Регистрация';
        return $this->render('admin/reg');
    }

    function show(){
        $this->title = 'Добро пожаловать';
        if ($_COOKIE['user']) {
            return $this->render('admin/show', ['user' => $_COOKIE['user']]);
        }
    }

}
