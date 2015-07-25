<?php 

define("DD", "../");
require DD . "app/controller/controllers.php";
require DD . "wpa20/functions.php";

$routes = include DD . "app/routes.php";

$request_uri = explode('/', $_SERVER['REQUEST_URI']);
$script_name = explode('/', $_SERVER['SCRIPT_NAME']);
$request_value = array_diff($request_uri, $script_name);
$request_value = array_values($request_value);


if(!empty($request_value)) {
	$page = htmlspecialchars($request_value[0]);
} else {
	$page = '';
}

if(array_key_exists($page, $routes)) {
	if(function_exists($routes[$page])) {
		array_shift($request_value);

		call_user_func($routes[$page], array_values($request_value));	
	} else {
		trigger_error("Controller does not exists!", E_USER_ERROR);
	}
	
} else {
	echo "404";
}



?>