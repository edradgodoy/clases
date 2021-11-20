<?php 

session_start();

require_once '../../core/conexion.php';

class delPuestos {
	private static $instancia;
	private $conexion;
	private function __construct() {
		// conexion a la base de datos
		$this->conexion = Conexion::singleton();
	}
	public static function singleton() {
		if (!isset(self::$instancia)) {
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}
	public function deletePuesto($id) {
		try {
			$sql = 'DELETE FROM puestos WHERE idpuestos = :id';
			$query = $this->conexion->prepare($sql);
			$query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->execute();
			echo '<script>windows.location("puestos");</script>';
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}
$id = $_POST['id'];
$resultado = delPuestos::singleton();
$resultado->deletePuesto($id);
