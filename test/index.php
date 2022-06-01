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
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo 'Versión actual de PHP: ' . phpversion();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
    echo 'Soy al menos la versión 6.0.0 de PHP, mi versión: ' . PHP_VERSION . "<br>";
}

if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo 'Soy al menos la versión 5.3.0 de PHP, mi versión: ' . PHP_VERSION . "<br>";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo 'Estoy usando la versión 5 de PHP, mi versión: ' . PHP_VERSION . "<br>";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    echo 'Estoy usando la versión 4 de PHP, mi versión: ' . PHP_VERSION . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$mysql = mysqli_connect('localhost', 'root', '');
printf("Version del servidor MySQL: %s\n", mysqli_get_server_info($mysql));
?>