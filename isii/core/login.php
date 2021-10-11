<?php 

require_once 'conexion.php';

class TestLogin {
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
	public function login() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		// consulta SQL para verificar si el usuario existe en la base de datos 
		$sql = 'SELECT *  FROM usuarios WHERE username = :username';
		// ejecutar la consulta
		$query = $this->conexion->prepare($sql);
		$query->bindParam(':username', $username, PDO::PARAM_STR, 45);
		$query->execute();
		$fetchAll = $query->FetchAll();
		if (count($fetchAll) >= 1) {
			foreach ($fetchAll as $result) {
				// traemos la contraseña desde la base de datos 
				$pass = $result['password'];
				// traemos el estado de la cuenta 
				$estado = $result['estado'];
				// traemos el nombre del usuario 
				$nombre = $result['pnombre'].' '.$result['snombre'].' '.$result['papellido'].' '.$result['sapellido'];
			}
			// Encryptar la contrasela proporcionada
			$hash = 'ksd[+a]!"394os';
			$password2 = $password.$hash;
			$dos = sha1(md5($password2));
			$crypt = crypt($dos, '$6$rounds=9999999$kkjsdjhkufiurkhudfy7hdjue$');
			if ($crypt === $pass) {
				if ($estado === 'Est_0001') {
					$_SESSION['username'] = $nombre;
					return true;
				} else {
					return 'La cuenta esta bloqueda temporalmente.';
				}
			} else {
				return 'La contraseña no cohinside con el nombre de usuario.';
			}
		} else {
			return 'No existe un usuario registrado con ese nombre.';
		}
	}
	public function __clone() {
		trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	}
}

?>