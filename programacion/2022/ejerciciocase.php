<?php 

// if ($nota < 60) {
// 	echo "Reprobado";
// } else {
// 	echo "Aprobado";
// }
$nota = 90;

echo '<h1>Notas con if</h1>';
if ($nota < 60) {
echo 'Calificativo de reprobado';
} elseif ($nota < 69) {
echo 'Calificativo de regular';
} elseif ($nota < 79){
echo 'Calificativo de bueno';
} elseif ($nota < 89){
echo 'Calificativo de muy bueno';
} elseif ($nota <= 100) {
echo 'Calificativo de exelente';
} else {
echo 'Fuera del parámetro';
}


echo '<h1>Notas con switch</h1>';

switch ($nota) {
	case ($nota < 60):
		echo 'Calificativo de reprobado';
		break;
	case ($nota < 69):
		echo 'Calificativo de regular';
		break;
	case ($nota < 79):
		echo 'Calificativo de bueno';
		break;
	case ($nota < 89):
		echo 'Calificativo de muy bueno';
		break;
	case ($nota <= 100):
		echo 'Calificativo de exelente';
		break;
	default:
		echo 'Fuera del parámetro';
		break;
}

echo '<h4>Ejemplo 2</h4>';

$combo = 3;

switch ($combo) {
	case 1:
		echo "Papas fritas, ensalada, lihwina";
		break;
	case 2:
		echo "Pollo frito, res azada, gallo pinto";
		break;
	case 3:
		echo "Gaseosa, pescado frito, tajadas, queso";
		break;
	case 4:
		echo "Coca cola, tamuga";
		break;
	default:
		echo 'No es un dato valido.';
		break;
}

echo "<h3>Calculadora swicth</h3>";
$operacion = 'multasd';
$dato1 = 4;
$dato2 = 5;
switch ($operacion){
	case 'suma':
		echo $result = $dato1 + $dato2;
		break;
	case 'resta';
		echo $result = $dato1 - $dato2;
		break;
	case 'div';
		echo $result = $dato1 / $dato2;
		break;
	case 'mult';
		echo $result = $dato1 * $dato2;
		break;
	default:
		echo 'La oparacion no se puede realizar.';
		break;
}




?>