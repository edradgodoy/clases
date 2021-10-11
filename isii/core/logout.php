<?php 
// inicializamos las variables de sesión 
session_start();
// limpiamos el valor de la variable de sesión 
unset($_SESSION['username']);
// eliminamos las variables de sesión 
session_destroy();
// redireccionamos a la paginas de inicio
header('location: ../index.php');

?>