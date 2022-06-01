<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejemplo - IA</title>
</head>
<body>
	<form action="" name="form-IA" method="POST" role="form">
		<label>¿Cual es tu comida favorita?</label><br><br>
		<input type="text" name="comida" placeholder="Escribe tu comida favorita">
		<br><br>
		<input type="submit" name="enviarIA" value="Responder">
	</form>
<?php 
	if (!empty($_POST['enviarIA'])) {
		$comida = $_POST['comida'];
		$msn1 = 'A mi tambien me gusta la tortuga';
		$msn2 = 'Tambien es rica esa comida, pero me gusta mas la tortuga';
		$mensajeMin = strtolower($comida);
		$tortuga = array('tortuga', 'Tortuga', 'TORTUGA', 'TOrtuga', 'TORtuga', 'TORTuga', 'TORTUga', 'TORTUGa', 'ToRtUgA');
		if ((strpos($mensajeMin,'tortuga'))) {
			echo $msn1;
		} else {
			if (in_array($mensajeMin,$tortuga)) {
				echo $msn1;
			} else {
				echo $msn2;
			}
		}
	}
?>
</body>
</html>