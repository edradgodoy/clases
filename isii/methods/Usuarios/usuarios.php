<?php 

require_once 'core/conexion.php';
require_once 'methods/globals/valid.class.php';

class Usuarios {
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
	public function listaUsuarios() {
		try {
			$sql = 'SELECT * FROM usuarios';
			$query = $this->conexion->prepare($sql);
			$query->execute();
			$fecthAll = $query->fetchAll();
			$datos = '';
			$item = 1;
			foreach ($fecthAll as $result) {

				// boton de eliminar 
				$btnEliminar = '<button type="button" class="btn btn-danger btn-sm" onclick="deleteUsuarios('.$result['idusuarios'].')">Eliminar</button>';
				// boton de editar 
				$btnEditar = '<button type="button" class="btn btn-warning btn-sm" onclick="editUsuarios('.$result['idusuarios'].')">Editar</button>';

				$datos .= '<tr>
					<td>'.$item.'</td>
					<td>'.$result['pnombre'].' '.$result['snombre'].' '.$result['papellido'].' '.$result['sapellido'].'</td>
					<td>'.$result['correo'].'</td>
					<td>'.$result['username'].'</td>
					<td>'.$btnEliminar.' '.$btnEditar.'</td>
				</tr>';
				$item++;
			}
			return $datos;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function listaPuestos() {
		try {
			$sql = 'SELECT * FROM puestos';
			$query = $this->conexion->prepare($sql);
			$query->execute();
			$fetchAll = $query->fetchAll();
			$datos = '';
			foreach ($fetchAll as $resultado) {
				 $datos .='<option value="'.$resultado['idpuestos'].'"> '.$resultado['puesto'].'</option>';
			}
			return $datos;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function addUsuario() {
		$valid = self::validacionUsuario();
		if ($valid === true) {
			try {
				$pnombre = $_POST['pnombre'];
				$snombre = $_POST['snombre'];
				$papellido = $_POST['papellido'];
				$sapellido = $_POST['sapellido'];
				$email = $_POST['email'];
				$username = $_POST['username'];


				$passw = $_POST['password'];
				// ENCRIPTAR LA CONTASEÑA 
				$hash = 'ksd[+a]!"394os';
				$pass = sha1(md5($passw.$hash));
				$password = crypt($pass, '$6$rounds=9999999$kkjsdjhkufiurkhudfy7hdjue$');


				$estcuenta = $_POST['estcuenta'];
				$idpuesto = $_POST['idpuesto'];
				$sql = 'INSERT INTO usuarios (fk_puestos, pnombre, snombre, papellido, sapellido, correo, username, password, estado, fecha_usuarios) VALUES (:idpuesto, :pnombre, :snombre, :papellido, :sapellido, :email, :username, :password, :estcuenta, now())';
				$query = $this->conexion->prepare($sql);
				$query->bindParam(':idpuesto', $idpuesto, PDO::PARAM_INT);
				$query->bindParam(':pnombre', $pnombre, PDO::PARAM_STR);
				$query->bindParam(':snombre', $snombre, PDO::PARAM_STR);
				$query->bindParam(':papellido', $papellido, PDO::PARAM_STR);
				$query->bindParam(':sapellido', $sapellido, PDO::PARAM_STR);
				$query->bindParam(':email', $email, PDO::PARAM_STR);
				$query->bindParam(':username', $username, PDO::PARAM_STR);
				$query->bindParam(':password', $password, PDO::PARAM_STR);
				$query->bindParam(':estcuenta', $estcuenta, PDO::PARAM_STR);
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

	public function validacionUsuario() {
		$pnombre = $_POST['pnombre'];
		$snombre = $_POST['snombre'];
		$papellido = $_POST['papellido'];
		$sapellido = $_POST['sapellido'];
		$v_pnombre = $this->validacion->caracteres1($pnombre,3,45,'del primer nombre');
		if ($v_pnombre === true) {
			$v_snombre = $this->validacion->caracteres1($snombre,3,45,'del segundo nombre');
			if ($v_snombre === true) {
				$v_papellido = $this->validacion->caracteres1($papellido,3,45,'del primer apellido');
				if ($v_papellido === true) {
					$v_sapellido = $this->validacion->caracteres1($sapellido,3,45,'del segundo apellido');
					if ($v_sapellido === true) {
						return true;
					} else {
						return $v_sapellido;
					}
				} else {
					return $v_papellido;
				}
			} else {
				return $v_snombre;
			}
		} else {
			return $v_pnombre;
		}
	}

	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}



?>