<?php
/*Created by Artem (16.06.2022 12:23)*/

namespace Project\Models;
use \Core\Model;

class AdminAuth extends Model {


    public function getUser($login, $pass) {
        return $this->findOne("SELECT * FROM user_admin WHERE pass = '$pass' and login = '$login'");
    }
}