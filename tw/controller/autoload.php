<?php 

class ViewPage{
	
	public function mostrar($pag) {
		if ($pag == 'dashboard' || $pag == 'elements' || $pag == 'generic') {
			$pagina = $pag;
		} else {
			$pagina = 'dashboard';
		}
		
		include 'views/header/widget-default.php';
		include 'views/'.$pagina .'/widget-default.php';
		include 'views/footer/widget-default.php';

	}

}

?>