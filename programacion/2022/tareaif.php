<?php 

// Validación de datos con PHP
$dato1 = 'hola';
$dato2 = 'adios';
// comparación de igualdad (iguales)
if ($dato1 == $dato2) {
	echo 'Si son iguales';
} 
// comparar si son diferentes
if ($dato1 != $dato2) {
	echo 'No son iguales';
} 

// identicos 
$num1 = 10;
$nom2 = '10';
if ($num1 === $nom2) {
	echo '<br>Los números son iguales';
}
// modulo (Números divisibles de 3)
$valor = 6;

if (($valor % 3) == 0) {
	echo '<br>El número es divisible entre 3';
} else {
	echo '<br>El número no es divisible entre 3';
}

// Credenciales de acceso
$username = 'admin123';
$password = 'admin1234';
echo '<br><br>';
if (($username === 'admin1234') && ($password === 'admin1234')) {
	echo "<br>Ha ingreso correctamente al sistema";
} else {
	echo "<br>El nombre de usuario o la contraseña son incorrectos";
}
echo '<br><br>if Anidados <br><br>';
if ($username === 'admin1234') {
	if ($password === 'admin1234') {
		echo 'Se ha ingresado correctamente';
	} else {
		echo 'La contaseña es incorrecta';
	}
} else {
	echo 'El nombre usuario es incorrecto';
}



?>