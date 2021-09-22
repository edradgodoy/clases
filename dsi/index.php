<?php

session_start();

if (isset($_GET['View'])) {
	$vista = $_GET['View'];
} else {
	$vista = 'Inicio';
}

include 'controller/autoload.php';
$mostrar = new ViewPag;
$mostrar->validPage($vista);
?>