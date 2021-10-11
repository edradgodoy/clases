<?php 

session_start();
if (isset($_SESSION['username'])) {
	if (isset($_GET['vista'])) {
		$url = $_GET['vista'];
	} else {
		$url = 'inicio';
	}
} else {
	$url = 'login';
}

include "controller/autoload.php";

$mostrar = new ver_pagina();
$mostrar->mostrarPag($url);

?>