<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/8/15
 * Time: 9:37 AM
 */

class Config {
    public static function get($get_value) {
        $explode_data = explode(".", $get_value);

        $file = DD . "/app/config/" . $explode_data[0] . ".php";
        // dump($file, true);

        if(file_exists($file)) {
            $config_data = include $file;
            if(array_key_exists($explode_data[1], $config_data)) {
                return $config_data[$explode_data[1]];
            } else {
                trigger_error("Config Key does not exist!", E_USER_ERROR);
            }

        } else {
            trigger_error("Config file does not exist!", E_USER_ERROR);
        }
    }
}