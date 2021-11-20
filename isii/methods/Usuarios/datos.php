<?php 

session_start();

require_once '../../core/conexion.php';

class Usuarios {
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

	public function traeDatos($id) {
		try {
			$sql = 'SELECT * FROM usuarios WHERE idusuarios = :id';
			$query = $this->conexion->prepare($sql);
			$query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->execute();
			$fetchAll = $query->fetchAll();
			foreach ($fetchAll as $result) {
				$datosPuesto = array(
									0 => $result['pnombre'],
									1 => $result['snombre'],
									2 => $result['papellido'],
									3 => $result['sapellido'],
									4 => $result['fk_puestos'],
									5 => $result['correo'],
									6 => $result['username'],
									7 => $result['estado']
									);
			}
			return $datosPuesto;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}
$id = $_POST['dato'];
$resultado = Usuarios::singleton();
$dato = $resultado->traeDatos($id);
echo json_encode($dato);

?>