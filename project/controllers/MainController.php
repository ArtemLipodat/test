<?php
/*Created by Artem (16.06.2022 15:13)*/

namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Main;

class MainController extends Controller {

    function index() {
        $this->title = 'Главная';

        $mainModel = new Main();

        $dom = $mainModel->getDom();

        return $this->render('main/main', ['dom' => $dom]);
    }

}