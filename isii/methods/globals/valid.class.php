<?php 

class validacion_campos {
	private static $instancia;
	public static function singleton_valid() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	// validacion caracteres
	/*
		descripcion de los parametros:
		@dato -> Recibe el valor del formulario para validar
		@min -> La longitus minima de los caracteres a validar
		@max -> La longitud maxima de los caracteres a validar 
		@msm -> El mensaje del error 
	*/
	public function caracteres1($dato, $min, $max, $msm) {
		if (strlen($dato) < $min) {
			return 'El campo '.$msm.' de contener mas de '.$min.' caracteres.';
		} elseif (strlen($dato) > $max) {
			return 'El campo '.$msm.' de contener menos de '.$max.' caracteres.';
		} elseif (preg_match('/[a-zA-Z]/', $dato) != 1) {
			return 'El campo '.$msm.' de contener solo letras de la a-z y A-Z.';
		} else {
			return true;
		}
		
	}

}

?>