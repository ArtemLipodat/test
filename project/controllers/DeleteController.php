<?php
/*Created by Artem (17.06.2022 14:42)*/

namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Add;

class DeleteController extends Controller {

    function delete() {
        $this->title = 'Удаление';
        $addModel = new Add();
        $dom = $addModel->getAll();
        $dom_child = $addModel->getAllChild();
        return $this->render('admin/delete', ['dom' => $dom, 'dom_child' => $dom_child]);
    }

    function deleteCheck() {

    }

}