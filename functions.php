<?php

include_once 'Db.php';
class functions extends Db {
    public function selectcars()
    {
        $sql = "SELECT * FROM `cars` LIMIT 0, 30 ";
        return $this->select($sql);
    }
}
