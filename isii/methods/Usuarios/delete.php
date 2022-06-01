<?php 

session_start();

require_once '../../core/conexion.php';

class delUsuario {
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
	public function deleteUsuario($id) {
		try {
			$sql = 'DELETE FROM usuarios WHERE idusuarios = :id';
			$query = $this->conexion->prepare($sql);
			$query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->execute();
			echo '<script>windows.location("usuarios");</script>';
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}
$id = $_POST['id'];
$resultado = delUsuario::singleton();
$resultado->deleteUsuario($id);