<?php

/*
$obj = new Obejct();
$obj2 = new Obejct();
*/


class Database {
    private static $instance = null;

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function connect(){
        echo "Connected to database!";
    }

}


$db1 = Database::getInstance();///

$db2 = Database::getInstance();