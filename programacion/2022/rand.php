<?php 
$suma_notas = 0;
for ($i=1; $i <= 100; $i++) { 
	$nota_rand = rand(0,100);
	echo 'Nota '.$i.' = '.$nota_rand.'<br>';
	$suma_notas = $suma_notas + $nota_rand;
}
echo 'Sumatoria de las notas: '.$suma_notas.'<br>';
$promedio = $suma_notas/100;
echo 'El promedio de las 100 notas es:'.$promedio;
?>