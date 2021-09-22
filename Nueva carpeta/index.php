<?php
session_start();
require 'controller/autoload.php';
if (isset($_GET['View'])) {
	$url = $_GET['View'];
}else{
	$url='Inicio';
}
$MostrarPagina = new ViewPage();
$MostrarPagina->view_page($url);