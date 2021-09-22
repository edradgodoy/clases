<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Convertidor de longitud</title>
</head>
<body>
	<form action="" method="POST">
		Convertidor de longitud <br>
		De unidad de medida <br>
		<select name="UM" id="UM">
			<option value="mm">mm</option>
			<option value="cm">cm</option>
			<option value="m">m</option>
			<option value="Km">Km</option>
			<option value="in">pulgada</option>
		</select> 
		Cantidad
		<input type="text" placeholder="Cantidad a convertir"> <br><br>
		A unidad de medida <br>
		<select name="a_UM" id="a_UM">
			<option value="mm">mm</option>
			<option value="cm">cm</option>
			<option value="m">m</option>
			<option value="Km">Km</option>
			<option value="in">pulgada</option>
		</select> <br><br>
		<input type="submit" value="Calcular" name="calcular">
	</form>
	<?php 
		/**
		 * 
		 */
		class convertidor {
			public function mm($cantidad, $a_um){
				if ($a_um == 'mm') {
					$cal = $cantidad * 1;
				} elseif ($a_um == 'cm') {
					$cal = $cantidad * 0.1;
				} elseif ($a_um == 'm') {
					$cal = $cantidad * 0.001;
				} elseif ($a_um == 'Km') {
					$cal = $cantidad * 0.000001;
				} else {
					$cal = $cantidad * 0.03937;
				}
			}
		}
	?>
</body>
</html>