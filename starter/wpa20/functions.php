<?php 

function make_view($page, $data = null) {
	ob_start();
	if($data != null) {
		extract($data);	
	}
	
	$file = DD . "app/view/" 
		. $page . ".php";

	if(file_exists($file)) {
		require $file;
	} else {
		echo "404";
	}
	ob_end_flush();

}


 ?>