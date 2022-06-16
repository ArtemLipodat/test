<?php
/*Created by Artem (16.06.2022 15:14)*/

namespace Project\Models;
use \Core\Model;

class Main extends Model {


    function getDom() {
        return $this->findMany("SELECT dom.id, dom.name, count(dom_child.dom_id) as count FROM dom join dom_child on dom_child.dom_id = dom.id GROUP BY dom.id");
    }

}