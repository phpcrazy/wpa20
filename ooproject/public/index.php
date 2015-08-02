<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 8/2/15
 * Time: 9:54 AM
 */

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";

$request_uri = explode('/', $_SERVER['REQUEST_URI']);
$script_name = explode('/', $_SERVER['SCRIPT_NAME']);
$request_value = array_diff($request_uri, $script_name);
$request_value = array_values($request_value);


if(!empty($request_value)) {
    $page = htmlspecialchars($request_value[0]);
} else {
    $page = '/';
}

$routes = include DD . "/app/routes.php";

if(array_key_exists($page, $routes)) {

    $get_class = explode("@", $routes[$page]);

    if(class_exists($get_class[0])) {
        array_shift($request_value);

        call_user_func_array(array(new $get_class[0], $get_class[1]), $request_value);
    } else {
        trigger_error("Controller Class does not exists!", E_USER_ERROR);
    }

} else {
    echo "404";
}

