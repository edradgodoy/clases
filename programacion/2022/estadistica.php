<?php 
$cantE = 1000;
$h = 0;
$m = 0;
for ($i=1; $i <= $cantE; $i++) { 
	$randon = rand(0,1);
	if ($randon == 1) {
		$h += 1;
		$sexo = 'Hombre';
	} else {
		$m += 1;
		$sexo = 'Mujer';
	}
	echo "Encuesta No".$i.": Sexo: ".$sexo."<br>";
}
$ph = ($h*100)/$cantE;
$pm = ($m*100)/$cantE;
echo 'Cantidad de hombres:'.$h.' que representa un '.number_format($ph,2).'%<br>';
echo 'Cantidad de mujeres:'.$m.' que representa un '.number_format($pm,2).'%<br>';
?>