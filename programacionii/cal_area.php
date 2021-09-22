<html>
<head>
<tittle>Calculadora de Áreas </tittle>
</head>
<body>
	<form action="" methods="POST">
		Base o radio:<br>
		<input name="base" type="text"><br><br>
		Altura:<br>
		<input name="altura" type="text"><br><br>
		Forma:<br>
		<select name="forma">
			<option value="cuadrado">Cuadrado</option>
			<option value="triangulo">Triangulo</option>
			<option value="circulo">Circulo</option>
		</select><br><br>
		<input name="calclular" type="submit" value="Calcular"><br><br>
	</form>
	<?php
		class cal_areas {
			public function mostrar() {
				$base = $_POST['base'];
				$alt = $_POST['altura'];
				$forma = $_POST['forma'];
				if ($forma == 'cuadrado') {
					$resultado = self::cuadrado($base,$alt);
				}
				if ($forma == 'triangulo') {
					$resultado = self::triangulo($base,$alt);
				}
				if ($forma == 'circulo') {
					$resultado = self::circulo ($base);
				}
				echo $resultado;
			}
			public function cuadrado($base,$alt){
				return $resultado = $base*$alt;
			}
			public function triangulo ($base,$alt){
				return $resultado = ($base*$alt)/2;
			}
			public function circulo($base){
				return $resultado =3.14 * ($base**2);
			}
		}
		if (!empty($_POST['calclular'])) { 
			$mostrar = new cal_areas();
			$mostrar->mostrar();
		}
	?>
</body>
</html>
