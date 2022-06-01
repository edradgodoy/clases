<?php 
$r1 = rand(100000,999999);
$r2 = rand(100000,999999);
echo $bc = $r1.$r2;
// echo $bc = '973594056482';
echo '<br>';
$par = 0;
$impar = 0;
for ($i=11; $i >= 0; $i--) { 
	if (($i%2) == 0) {
		//multiplicar por 1
		$par += $bc[$i];
	} else {
		// Multiplicar por 3
		$impar += ($bc[$i])*3;
	}
}
echo $par;
echo "<br>";
echo $impar;
echo "<br>";
echo $suma = $par+$impar;
echo "<br>";
echo $mul = $suma%10;
if ($mul == 0) {
	echo "<br>";
	echo $bar = $bc.'0';
} else {
	echo "<br>";
	echo $mul2 = $suma - $mul;
	echo "<br>";
	echo $mul3 = $mul2 + 10;
	echo "<br>";
	echo $dc = $mul3 - $suma;
	echo "<br>";
	echo $bar = $bc.$dc;
}
?>