<?php 
echo $codigo = '853594156482';
$sumatoria = 0;
for ($i=0; $i < (strlen($codigo)); $i++) { 
	if (($i%2)!=0) {
		$valor = ($codigo[$i])*3;
	} else {
		$valor = $codigo[$i];
	}
	$sumatoria = $sumatoria + $valor;
}
if (($sumatoria%10) == 0) {
	$mod = 0;
} else {
	$mod = (($sumatoria - ($sumatoria%10)) + 10) - $sumatoria;
}
echo $codigo.$mod;
?>