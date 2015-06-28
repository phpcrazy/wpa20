<?php 

define("DD", "../");

if(empty($_GET['page'])) {
	include DD . "app/view/home.php";
} else {
	$page = $_GET['page'];
	$file = DD . "app/view/" . $page . ".php";
	if(file_exists($file)) {
		include $file;
	} else {
		echo "404";
	}
}
?>