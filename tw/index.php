<?php 

include 'controller/autoload.php';

if (isset($_GET['view'])) {
	// Si se ha creado o asignado la variable de la URL guardamos el valor de la URL en la variable view
	$view = $_GET['view'];

} else {
	
	$view = 'dashboard';

}

$imprimir = new ViewPage();
$imprimir->mostrar($view);

?>