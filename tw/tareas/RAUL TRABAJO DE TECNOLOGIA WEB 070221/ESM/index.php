<?php 



if (isset($_GET['view'])) {
	$vista = $_GET['view'];
} else {
	$vista = 'dashboard';
}


include 'controller/autoload.php';


?>
