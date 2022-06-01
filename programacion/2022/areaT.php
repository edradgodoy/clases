<?php //iniciar el programa
//Solucitar los datos del LadoA y el LadoB
$LadoA = 5;
$LadoB = 3;
//Aplicar la formula area=(LadoA * LadoB)/2
if ($LadoB != 0) {
	$area = $LadoA / $LadoB;
	//Imprimir el resultado
	echo $area;
} else {
	echo'No se puede realizar la divición';
}
//Filanizar el programa 
?>