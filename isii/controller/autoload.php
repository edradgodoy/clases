<?php 

class ver_pagina {
	public function mostrarPag($url) {
		if ($url === 'login') {
			include 'views/login.php';
		} else {
			$permitidos = array('login','inicio','puestos');
			if (in_array($url, $permitidos)) {
				include 'views/header.php';
				include 'views/'.$url.'.php';
				include 'views/footer.php';
			} else {
				echo 'error 401: esa pagina no existe';
			}
		}
	}
}

?>