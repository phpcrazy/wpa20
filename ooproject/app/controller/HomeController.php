<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 10:05 AM
 */

class HomeController {
    public function index() {
        View::make("home");
    }
}