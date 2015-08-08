<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/8/15
 * Time: 10:49 AM
 */

class DB {

    private static $_instance = null;

    private $conn;
    private $table_name;

    public function __construct() {
        echo "Constructor!";
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=wpa20_students",
                "root", "mmlinks");
        } catch(PDOException $e) {
            echo "Something wrong with Database Connection. Databasse connection failed!";
        }
    }

    public function __destruct() {
        echo "Destructor!";
    }


    // Singaleton
    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        return self::$_instance;
    }

    public function get() {
        $query = $this->conn->query("SELECT * FROM " . $this->table_name);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

/*
 *
 */