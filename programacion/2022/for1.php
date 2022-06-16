<?php 
for ($i=1; $i <= 10; $i++) {
	echo "Tablas del $i <br>";
	for ($j=1; $j <= 12; $j++) { 
		$c = $j * $i;
		echo $i.' X '.$j.' = '.$c.'<br>';
	}
}
?>