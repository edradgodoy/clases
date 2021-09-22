<form action="" method="POST">
	Dato 1: <input type="text" name="pdato"><br><br>
	Dato 2: <input type="text" name="sdato"><br><br>
	Opciones:
	<select name="opciones">
		<option value="suma">suma</option>
		<option value="resta">resta</option>
		<option value="mult">multiplicar</option>
		<option value="div">dividir</option>
	</select><br><br>
	<input type="submit" name="calclular" value="Calcular">
</form>

<?php 

class calculadora {
	public function calcular() {
		$dato1 = $_POST['pdato'];
		$dato2 = $_POST['sdato'];
		$op = $_POST['opciones'];
		if ($op == 'suma') {
			$resultado = self::sumar($dato1, $dato2);
		}
		if ($op == 'resta') {
			$resultado = self::restar($dato1, $dato2);
		}
		if ($op == 'mult') {
			$resultado = self::mult($dato1, $dato2);
		}
		if ($op == 'div') {
			$resultado = self::divi($dato1, $dato2);
		}
		echo '<br><div style="backgound-color:#0f0f0f;">'.$resultado.'</div>';
	}
	public function sumar($dato1, $dato2) {
		return $res = $dato1 + $dato2;
	}
	public function restar($dato1, $dato2) {
		return $res = $dato1 - $dato2;
	}
	public function mult($dato1, $dato2) {
		return $res = $dato1 * $dato2;
	}
	public function divi($dato1, $dato2) {
		return $res = $dato1 / $dato2;
	}

}

if (!empty($_POST['calclular'])) {
	$mostrar = new calculadora();
	$mostrar->calcular();
}

?>