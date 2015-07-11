<?php 

define("DD", "../");
require DD . "app/controller/controllers.php";
require DD . "wpa20/functions.php";

if(empty($_GET['page'])) {
	_HomeController();
} else {
	$page = $_GET['page'];
	if($page == "page") {
		_PageController($page);	
	} else if($page == "seed") {
		_SeedController($page);
	} 
}

?>