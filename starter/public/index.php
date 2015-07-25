<?php 

define("DD", "../");
require DD . "app/controller/controllers.php";
require DD . "wpa20/functions.php";

$routes = include DD . "app/routes.php";

if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
} else {
	$page = '';
}

if(array_key_exists($page, $routes)) {
	if(function_exists($routes[$page])) {
		call_user_func($routes[$page]);	
	} else {
		trigger_error("Controller does not exists!", E_USER_ERROR);
	}
	
} else {
	echo "404";
}



?>