<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/8/15
 * Time: 10:49 AM
 */

class DB extends PDO {

    private static $_instance = null;
    private $table_name = null;
    private $sql_statement = null;
    private $isWhere = false;
    private $value = null;
    private $key = null;

    public function __construct() {
        $dns = Config::get("database.dns");
        $hostname = Config::get("database.hostname");
        $dbname = Config::get("database.dbname");
        $username = Config::get("database.username");
        $password = Config::get("database.password");

        $dns_combine = $dns . ":host=" . $hostname . ";dbname=" . $dbname;

        parent::__construct($dns_combine, $username, $password);
    }

    public function __destruct() {
        var_dump("DB Object Destroy!");
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
        if($this->isWhere == false) {
            $query = $this->query("SELECT * FROM " . $this->table_name);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $prep = $this->prepare($this->sql_statement);
            $prep->execute(array($this->key => $this->value));

            $this->isWhere = false;
            $this->key = null;
            $this->value = null;

            return $prep->fetchAll(PDO::FETCH_ASSOC);
        }

    }

    public function find($id) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id=:id";
        $prep = $this->prepare($sql);
        $prep->execute(array("id" => $id));

        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }

    public function where($key, $value) {
        $this->isWhere = true;
        $this->sql_statement = "SELECT * FROM "
            . $this->table_name
            . " WHERE "
            . $key
            . "= :"
            . $key;

        $this->key = $key;
        $this->value = $value;


        return $this;
    }

}
