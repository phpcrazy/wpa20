<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 10:56 AM
 */

class View {
    public static function make($page, $data = null)
    {
        ob_start();
        if ($data != null) {
            extract($data);
        }

        $file = DD . "/app/view/"
            . $page . ".php";

        if (file_exists($file)) {
            require $file;
        } else {
            echo "404";
        }
        ob_end_flush();
    }
}