<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 10:05 AM
 */

class HomeController {
    public function index() {
        $students = DB::table("students")->find("5");

        $all_students = DB::table("students")->where("name", "Aung Aung")->get();

        var_dump($all_students);
        // dump($students, true);
        $data = [
            'site_title'  => Config::get("app.site_title"),
            'students'  => $students

        ];

        $classes = DB::table("classes")->get();
        var_dump($classes);

        View::make("home", $data);
    }
}