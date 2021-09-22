<?php 



	if ($vista == 'dashboard' || $vista == 'Home' || $vista == 'About') {
		
		$views = $vista;

	
	} else {
		$views = 'dashboard';
	}	


	include 'views/header/widget-default.php';
	include 'views/'.$views.'/widget-default.php';
	include 'views/footer/widget-default.php';



	

?>