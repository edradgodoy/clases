<?php 

/**
 * objeto para realizar los calcolos del convertidor 
 */

include '../methods/Longitud.php';
include '../methods/Masa.php';
include '../methods/Superficie.php';
include '../methods/Temperatura.php';
include '../methods/Velocidad.php';
include '../methods/Volumen.php';

class Convertidor {
	private static $instancia;
	private $Longitud_methods;
	private $Masa_methods;
	private $Superficie_methods;
	private $Temperatura_methods;
	private $Velocidad_methods;
	private $Volumen_methods;
	private function __construct() {
		$this->Longitud_methods = longitud::access_longitud();
		$this->Masa_methods = masa::access_masa();
		$this->Superficie_methods = superficie::access_superficie();
		$this->Temperatura_methods = temperatura::access_temperatura();
		$this->Velocidad_methods = velocidad::access_velocidad();
		$this->Volumen_methods = volumen::access_volumen();
	}
	public static function access_global() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public function ejecutar () {
		$um = $_POST['um'];
		$origen = $_POST['origen'];
		$cantidad = $_POST['cantidad'];
		$para = $_POST['para'];
		$validDato = self::numericos_float($cantidad);
		if ($validDato === true) {
			switch ($um) {
				case 'Longitud':
					$respuesta = $this->Longitud_methods->calcula($origen, $para, $cantidad);
					break;
				case 'Temperatura':
					$respuesta = $this->Temperatura_methods->calcular($origen, $para, $cantidad);
					break;
				case 'Volumen':
					$respuesta = $this->Volumen_methods->calcular($origen, $para, $cantidad);
					break;
				case 'Masa':
					$respuesta = $this->Masa_methods->calcular($origen, $para, $cantidad);
					break;
				case 'Velocidad':
					$respuesta = $this->Velocidad_methods->calcular($origen, $para, $cantidad);
					break;
				default:
					$respuesta = $this->Superficie_methods->calcular($origen, $para, $cantidad);
					break;
			}
			$respuesta2 = self::formatomuneros($respuesta);
			echo '<div class="alert alert-success">'.$respuesta2.'</div>';
		} else {
			echo '<div class="alert alert-danger">'.$validDato.'</div>';
		}
	}

	public static function numericos_float($numero) {
		switch ($numero) {
			case (!empty($numero) && strlen($numero) == 0 && $numero == ''):
				return '<b>¡Advertencia! </b>La cantidad a convertir es un campo obligatorio.';
				break;
			case (strlen($numero) < 1):
				return 'La cantidad a convertir debe de tener por lo menos 1 caracteres.';
				break;
			case (strlen($numero) > 13):
				return 'La cantidad a convertir debe tener un máximo de 13 caracteres.';
				break;
			case (!filter_var($numero, FILTER_VALIDATE_FLOAT)):
				return 'La cantidad a convertir no coincide con el tipo de dato esperado.';
				break;
			default:
				return true;
				break;
		}
	}
	public function formatomuneros($valor) {
		$valorFormatedo = number_format($valor, 7, '.', ', ');
		return $valorFormatedo;
	}
}

$resultado = Convertidor::access_global();
$resultado->ejecutar();

?>