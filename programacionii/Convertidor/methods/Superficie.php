<?php 

/**
 * 
 */
class superficie{
	private static $instancia;
	public static function access_superficie() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public function calcular($de,$a,$cant) {
		switch ($de) {
			case 'acres':
				return self::acres($a,$cant);
				break;
			case 'ht':
				return self::hectareas($a,$cant);
				break;
			default:
				# code...
				break;
		}
	}
	public function acres($a,$cant) {
		switch ($a) {
			case 'acres':
				return $res = $cant * 1;
				break;
			case 'ht':
				return $res = $cant * 0.4046856;
				break;
			case 'cmc':
				return $res = $cant * 40.4685642;
				break;
			case 'kftc':
				return $res = $cant * 43.560;
				break;
			case 'inc':
				return $res = $cant * 6.272640;
				break;
			case 'mtc':
				return $res = $cant * 4.0468564;
				break;
		}
	}
	public function hectareas($a,$cant) {
		switch ($a) {
			case 'acres':
				return $res = $cant * 2.4710538;
				break;
			case 'ht':
				return $res = $cant * 1;
				break;
			case 'cmc':
				return $res = $cant * 100000000;
				break;
			case 'kftc':
				return $res = $cant * 107639.1041671;
				break;
			case 'inc':
				return $res = $cant * 15500031.000062;
				break;
			case 'mtc':
				return $res = $cant * 10000;
				break;
		}
	}
}

?>