<?php
/*Created by Artem (16.06.2022 15:39)*/

namespace Project\Controllers;
use \Core\Controller;
use Core\View;
use Project\Models\Data;
use Project\Models\Main;

class DataController extends Controller {

    private $child;

    function data() {
        $this->title = 'Главная';

        $id = $_GET['id'];

        $model = new Data();
        $child = $model->getChildById($id);

        $count = [];
        foreach ($child as $k => $v) {
            $count[$v['id']] = $model->getCount($v['id'])[0];
        }

        $a = [];
        foreach ($child as $k => $v) {
            if ($count[$v['id']]) {
                $a[] = array_merge($v, $count[$v['id']]);
            }
        }
        return json_encode($a);

    }


    function desc() {
        $model = new Data();
        if (isset($_GET['id'])) {
            return json_encode($model->getDesc($_GET['id']));
        } elseif (isset($_GET['child'])) {
            return json_encode($model->getDescChild($_GET['child']));
        } else {
            return json_encode([]);
        }
    }
}