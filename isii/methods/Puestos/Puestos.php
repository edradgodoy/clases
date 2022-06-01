<?php 

require_once 'core/conexion.php';
require_once 'methods/globals/valid.class.php';

class Puestos {
	private static $instancia;
	private $conexion;
	private $validacion;
	private function __construct() {
		// conexion a la base de datos
		$this->conexion = Conexion::singleton();
		$this->validacion = validacion_campos::singleton_valid();
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
					<td>'.htmlspecialchars($result['puesto']).'</td>
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
		$valid = self::valid();
		if ($valid === true) {
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
		} else {
			return $valid;
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

	// validaciones para agregar 
	function valid(){
		$puesto = $_POST['nombrePuesto'];
		$v_puesto = $this->validacion->caracteres1($puesto, 3, 45, 'del puesto');
		if ($v_puesto === true) {
			return true;
		} else {
			return $v_puesto;
		}
	}

	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}



?>