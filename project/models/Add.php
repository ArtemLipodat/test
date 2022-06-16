<?php
/*Created by Artem (16.06.2022 14:31)*/

namespace Project\Models;
use \Core\Model;

class Add extends Model {

    public function getAll() {
        return $this->findMany("SELECT id, name FROM dom");
    }

    public function getAllChild() {
        return $this->findMany("SELECT id, name FROM dom_child");
    }

}