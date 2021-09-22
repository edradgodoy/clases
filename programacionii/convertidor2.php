<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="jquery.js"></script>
</head>
<body>
<h2>Convertidor de unidades</h2>
<form action="" name="convertidor" id="convertidor">
	Unidades <br>
	<select name="unidades" id="unidades">
		<option value="Longitud">Longitud</option>
		<option value="Superficie">Superficie</option>
		<option value="Temperatura">Temperatura</option>
		<option value="Volumen">Volumen</option>
		<option value="Masa">Masa</option>
		<option value="Datos">Datos</option>
		<option value="Velocidad">Velocidad</option>
	</select> <br><br>
	De: <select name="UM_De" id="UM_De"></select> <br><br>
	Cantidad: <input type="text" name="cantidad" id="cantidad"> <br><br>
	A: <select name="UM_A" id="UM_A"></select> <br><br>
	<input type="submit" name="calcular" id="calcular" value="Calcular">

</form>

<script type="text/javascript">
	$(document).ready(function() {
		$('#unidades').on('change', function() {
			var unidad = $('#unidades').val();
			if (unidad == '') {}
		});
	});
</script>
</body>
</html>
