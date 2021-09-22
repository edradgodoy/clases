<?php 

/**
 * 
 */
class volumen{
	private static $instancia;
	public static function access_volumen() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public function calcular($de,$a,$cant) {
		
	}
}

?>