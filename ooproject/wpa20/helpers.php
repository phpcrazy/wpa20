<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 10:14 AM
 */


function dump($value, $die = false) {
    var_dump($value);
    if($die == true) {
        die();
    }
}