<?php 

function _HomeController() {
	make_view("home");
}

function _PageController($page) {
	$data = [
		'title'	=> 'Myanmar Links',
		'username'	=> "Soe Thiha",
		"address"	=> 'Hledan'
	];
	make_view($page, $data);
}

function _SeedController($page) {
	$data = [
		'seedname' => "Test"
	];

	make_view($page, $data);
}


 ?>