<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 10:22 AM
 */

class BlogController {

    public function __construct() {
        echo "Constructor!";
    }

    public function index($category, $id) {
        echo "Blog Area!" . $category . " " . $id;
    }
}