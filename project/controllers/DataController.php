<?php
/*Created by Artem (16.06.2022 15:39)*/

namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Data;
use Project\Models\Main;

class DataController extends Controller {


    function data() {
        $this->title = 'Главная';

        $id = $_GET['id'];

        $model = new Data();
        $mainModel = new Main();

        $dom = $mainModel->getDom();

        $child = $model->getChildById($id);

        $count = [];
        foreach ($child as $k => $v) {
            $count[$v['id']] = $model->getCount($v['id'])[0];
        }

        var_dump($count);

        return $this->render('main/main', ['child' => $child, 'dom' => $dom, 'childCount' => $count]);
    }



}