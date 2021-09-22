<?php 

/**
 * objeto que va a traer las vistas con los methods CRUD
 */
class controller_vistas {
	// metodo para llamar a las vistas
	public function mostrar_pagina($pag) {
		include 'views/header/widget-default.php';
		include 'views/'.$pag.'/widget-default.php';
		include 'views/footer/widget-default.php';
	}
}
?>