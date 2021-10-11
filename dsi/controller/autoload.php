<?php
class ViewPag {
	public function validPage($page) {
		$Permitidas = array('Inicio', 'Productos', 'Usuarios', 'login');
		if (in_array($page, $Permitidas)) {
			if ($page == 'login') {
				include 'views/login.php';
			} else {
				include 'views/'.$page.'.php';
			}
		} else {
			echo "No esta permitido entrar en esta pagina.";
		}
	}
}
?>