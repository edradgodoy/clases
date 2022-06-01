<?php 
echo '<h4>Tablas de multiplicar</h4>';
for ($i=30; $i <= 60; $i++) { 
	echo "<h5>Tabla del: <strong>".$i."</strong></h5>";
	for ($j=0; $j <= 12; $j++) { 
		$r = $j-$i;
		echo $i.' - '.$j.' = '.$r.'<br>';
	}
}
?>