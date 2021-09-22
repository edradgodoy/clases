<?php 
echo '<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Procedencia</th>
		</tr>
	</thead>';
$cantEst = 150;
// edad
$edad1 = 0;
$edad2 = 0;
$edad3 = 0;
$edad4 = 0;
// sexo
$masculino = 0;
$femenino = 0;
// procedencia
$rural = 0;
$urbano = 0;
// Media
$media = 0;
for ($j=1; $j <= $cantEst; $j++) { 
	// nombre
	$abc = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUWXYZ';
	$rand1 = rand(3,8);
	$nombre = '';
	for ($i=1; $i <= $rand1; $i++) {
		$rand2 = rand(0,50);
		$nombre.=$abc[$rand2];
	}
	// edad
	$edad = rand(5,70);
	$media = $media+$edad;
	switch ($edad) {
		case ($edad <= 15):
			$edad1++;
			break;
		case ($edad <= 30):
			$edad2++;
			break;
		case ($edad <= 45):
			$edad3++;
			break;
		default:
			$edad4++;
			break;
	}
	// sexo
	$rand4 = rand(0,1);
	if ($rand4 == 0) {
		$sexo = 'Masculino';
		$masculino++;
	} else {
		$sexo = 'Femenino';
		$femenino++;
	}
	// procedencia
	$rand5 = rand(0,1);
	if ($rand5 == 0) {
		$procedencia = 'Urbano';
		$urbano++;
	} else {
		$procedencia = 'Rural';
		$rural++;
	}
	echo '<tbody>
		<tr>
			<td>'.$j.'</td>
			<td>'.$nombre.'</td>
			<td>'.$edad.'</td>
			<td>'.$sexo.'</td>
			<td>'.$procedencia.'</td>
		</tr>
	</tbody>';
}
echo '</table>';
echo '<br><br><br>';
//calcular el procentaje de la edad 1
$pe1 = ($edad1/$cantEst)*100;
echo 'La cantidad de estudiantes con la edad de 0 - 15 años es de '.$edad1.', que representa un porcentaje de: '. $pe1.' %';
echo '<br>';
$pe2 = ($edad2/$cantEst)*100;
echo 'La cantidad de estudiantes con la edad de 16 - 30 años es de '.$edad2.', que representa un porcentaje de: '. $pe2.' %';
echo '<br>';
$pe3 = ($edad3/$cantEst)*100;
echo 'La cantidad de estudiantes con la edad de 31 - 45 años es de '.$edad3.', que representa un porcentaje de: '. $pe3.' %';
echo '<br>';
$pe4 = ($edad4/$cantEst)*100;
echo 'La cantidad de estudiantes con la edad de 46 años a más es de '.$edad4.', que representa un porcentaje de: '. $pe4.' %';
echo '<br><br><br>';
$ps1 = ($masculino/$cantEst)*100;
echo 'La cantidad de estudiantes masculino es de '.$masculino.', que representa un porcentaje de: '. $ps1.' %';
echo '<br>';
$ps2 = ($femenino/$cantEst)*100;
echo 'La cantidad de estudiantes femeninas es de '.$femenino.', que representa un porcentaje de: '. $ps2.' %';
echo '<br><br><br>';
$pr1 = ($rural/$cantEst)*100;
echo 'La cantidad de estudiantes de procedencia rural es de '.$rural.', que representa un porcentaje de: '. $pr1.' %';
echo '<br>';
$pr2 = ($urbano/$cantEst)*100;
echo 'La cantidad de estudiantes de procedencia urbana es de '.$urbano.', que representa un porcentaje de: '. $pr2.' %';
echo '<br><br><br>';
$mediaedad = $media/$cantEst;
echo 'La edad media de los estudiantes es de '.$mediaedad.' años';
echo '<br><br><br>';
?>