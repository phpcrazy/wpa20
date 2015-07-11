<?php 

define("DD", "../");
require DD . "wpa20/functions.php";

if(empty($_GET['page'])) {
	make_view("home");
} else {
	$page = $_GET['page'];
	$data = [
		'title'	=> 'Myanmar Links',
		'username'	=> "Soe Thiha",
		"address"	=> 'Hledan'
	];
	make_view($page, $data);
	
}

?>