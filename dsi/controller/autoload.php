<?php
class ViewPag {
	public function validPage($page) {
		$Permitidas = array('Inicio', 'Productos', 'Usuarios');
		if (in_array($page, $Permitidas)) {
			echo 'Si es permitida';
		} else {
			echo "No esta permitido entrar en esta pagina.";
		}
	}
}
?>