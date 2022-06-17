<?php
/*Created by Artem (16.06.2022 15:51)*/

namespace Project\Models;
use \Core\Model;

class Data extends Model {

    function getChildById($id) {
        $sql = "SELECT `name`, `desc`, `id`, `dom_id` FROM `dom_child` where `dom_id` = '$id'";
        return $this->findMany($sql);
    }

    function getCount($id) {
        $sql = "SELECT count(*) as count FROM `dom_child` where `dom_id` = '$id'";
        return $this->findMany($sql);
    }

    function getDesc($id) {
        $sql = "SELECT `desc` FROM `dom` where `id` = '$id'";
        return $this->findOne($sql);
    }

    function getDescChild($id) {
        $sql = "SELECT `desc` FROM `dom_child` where `id` = '$id'";
        return $this->findOne($sql);
    }

}