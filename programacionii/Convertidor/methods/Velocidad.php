<?php 

/**
 * 
 */
class velocidad{
	private static $instancia;
	public static function access_velocidad() {
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