<?php 

/**
 * 
 */
class longitud{
	private static $instancia;
	public static function access_longitud() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public static function calcular($de,$a,$cant) {
		
	}
}

?>