<?php 

echo php_uname();
echo "<br>";
echo PHP_OS;
echo "<br>";
// arquitectura del procesador 
echo php_uname('m');
echo "<br>";
// nombre del dispositivo
echo php_uname('n');
echo "<br>";
// version del SO
echo php_uname('r');
echo "<br>";
// Sistema operativo
echo php_uname('s');
echo "<br>";
// version del SO
echo php_uname('v');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(opcache_get_status()['jit']);

?>