<?php 

require_once 'core/conexion.php';

class Puestos {
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

	// Lista de los puestos registrados en la base de datos 
	public function listaPuestos() {
		try {
			$sql = 'SELECT * FROM puestos';
			$query = $this->conexion->prepare($sql);
			$query->execute();
			$fecthAll = $query->fetchAll();
			$datos = '';
			$item = 1;
			foreach ($fecthAll as $result) {

				// boton de eliminar 
				$btnEliminar = '<button type="button" class="btn btn-danger btn-sm" onclick="deletePuesto('.$result['idpuestos'].')">Eliminar</button>';
				// boton de editar 
				$btnEditar = '<button type="button" class="btn btn-warning btn-sm" onclick="editPuesto('.$result['idpuestos'].')">Editar</button>';

				$datos .= '<tr>
					<td>'.$item.'</td>
					<td>'.$result['puesto'].'</td>
					<td>'.$btnEliminar.' '.$btnEditar.'</td>
				</tr>';
				$item++;
			}
			return $datos;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function addPuesto() {
		try {
			$puesto = $_POST['nombrePuesto'];
			$sql = 'INSERT INTO puestos (puesto, fecha_puetso) VALUES (:puesto, now())';
			$query = $this->conexion->prepare($sql);
			$query->bindParam(':puesto', $puesto, PDO::PARAM_STR, 45);
			if ($query->execute()) {
				return true;
			} else {
				return $query;
			}

		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function editPuesto() {
		try {
			$id = $_POST['idPuesto'];
			$puesto = $_POST['nombrePuesto'];
			$sql = 'UPDATE puestos SET puesto = :puesto WHERE idpuestos = :id';
			$query = $this->conexion->prepare($sql);
			$query->bindParam(':puesto', $puesto, PDO::PARAM_STR, 45);
			$query->bindParam(':id', $id, PDO::PARAM_INT);
			if ($query->execute()) {
				return true;
			} else {
				return $query;
			}

		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}



?>