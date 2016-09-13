<?php

include_once 'Db.php';

class functions extends Db {

    public function selectcars($low_price, $high_price, $low_mileage, $high_mileage) {
        $sql = "SELECT * FROM `cars` WHERE (`price` BETWEEN $low_price and $high_price) && (`mileage` BETWEEN $low_mileage and $high_mileage)";
        return $this->select($sql);
    }

    public function selectcarsfuel($low_price, $high_price, $low_mileage, $high_mileage, $fuel) {
        $sql = "SELECT * FROM `cars` WHERE (`price` BETWEEN $low_price and $high_price) && (`mileage` BETWEEN $low_mileage and $high_mileage)&&(  `fuel` =  '$fuel' )";
        return $this->select($sql);
    }

    public function selectcarsmake($low_price, $high_price, $low_mileage, $high_mileage, $make) {
        $sql = "SELECT * FROM `cars` WHERE (`price` BETWEEN $low_price and $high_price) && (`mileage` BETWEEN $low_mileage and $high_mileage) && `make` IN ('" . implode("', '", $make) . "')";
        return $this->select($sql);
    }

    public function selectcarsfuelmake($low_price, $high_price, $low_mileage, $high_mileage, $make, $fuel) {
        $sql = "SELECT * FROM `cars` WHERE (`price` BETWEEN $low_price and $high_price) && (`mileage` BETWEEN $low_mileage and $high_mileage) &&(  `fuel` =  '$fuel' )  && `make` IN ('" . implode("', '", $make) . "')";
        return $this->select($sql);
    }

    public function selectmake() {
        $sql = "SELECT DISTINCT `make` FROM  `cars`";
        return $this->select($sql);
    }

    public function search($data) {
        $sql = "SELECT * FROM `cars` WHERE (CONVERT(`model` USING utf8) LIKE '%$data%') || (CONVERT(`make` USING utf8) LIKE '%$data%')";
        return $this->select($sql);
    }

    public function getcar($carname) {
        $sql = "SELECT * FROM  `cars` WHERE  `model` =  '$carname'";
        return $this->select($sql);
    }

}
