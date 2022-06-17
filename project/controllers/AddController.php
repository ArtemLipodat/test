<?php
/*Created by Artem (16.06.2022 14:10)*/
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Add;

class AddController extends Controller {


    function addForm() {
        $this->title = 'Добавление';
        $addModel = new Add();
        $dom = $addModel->getAll();
        $dom_child = $addModel->getAllChild();
        return $this->render('admin/form', ['dom' => $dom, 'dom_child' => $dom_child]);
    }

    function add() {
        $this->title = 'Добавление успешно';
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $dom = $_POST['dom'];
        $dom_child = $_POST['dom_child'];


        //Когда не выбран подраздел и выбран раздел записываем как дочерний элемент раздела
        if ($dom && !$dom_child) {
            $sql = "INSERT INTO `dom_child` (`name`, `desc`, `dom_id`) VALUES ('$name', '$desc', $dom)";
            $id = $this->insert($sql)->insert_id;
            if ($id) {
                return $this->render('/admin/show', ['user' => $_COOKIE['user'], 'succses' => 'Добавление  успешно']);
            }
        }

        //когда не выбран раздел и выбран дочерний раздел записываем как дочерний дочернего раздела
        else if(!$dom && $dom_child) {
            $sql = "INSERT INTO `dom_child` (`name`, `desc`, `dom_id`) VALUES ('$name', '$desc', $dom_child)";
            $id = $this->insert($sql)->insert_id;
            if ($id) {
                return $this->render('/admin/show', ['user' => $_COOKIE['user'], 'succses' => 'Добавление  успешно']);
            }
        }


        //Создаем раздел
        else if (!$dom_child && !$dom){
            $sql = "INSERT INTO `dom` (`name`, `desc`) VALUES ('$name', '$desc')";

            $id = $this->insert($sql)->insert_id;

            if ($id) {
                return $this->render('/admin/show', ['user' => $_COOKIE['user'], 'succses' => 'Добавление  успешно']);
            }
        }


    }


    function insert($sql){
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        return $con;
    }

}