<?php 
// Indicar a php la tabla que queremos que se nos muestre
$tabla = 4;
// inicio 
$i = 0;
while ($i<=12) {
	$r = $tabla*$i;
	echo $tabla.' X '.$i.' = '.$r.'<br>';
	$i++;
}
?>