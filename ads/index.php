<?php 
// evaluar el valor de la pagina solicitada
if (isset($_GET['views'])) {
	$new_pag = $_GET['views'];
} else {
	$new_pag = 'index';
}
// Traer el controlador
include 'controller/autoload.php';
// instancia al objeto 
$mostrar = new controller_vistas();
// traer el metodo del objeto
$mostrar->mostrar_pagina($new_pag);
?>