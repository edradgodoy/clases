<?php 
class A {
	private static $instancia;
	public static function access() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}


	public static function suma() {
		return $res = 1+2+3+4;
	}
}

class B {
	private $cal;
	private static $instancia;
	private function __construct() {
		$this->cal = A::access();
	}
	public static function access() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function mostrar() {
		echo $this->cal->suma();
	}
}

$mostrar  = B::access();
$mostrar->mostrar();

?>