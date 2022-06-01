<?php 

// if ($nota < 60) {
// 	echo "Reprobado";
// } else {
// 	echo "Aprobado";
// }
$nota = 90;
if ($nota < 60) {
echo 'Calificativo de reprobado';
} elseif ($nota < 69) {
echo 'Calificativo de regular';
} elseif ($nota < 79){
echo 'Calificativo de bueno';
} elseif ($nota < 89){
echo 'Calificativo de muy bueno';
} elseif ($nota <= 100) {
echo 'Calificativo de exelente';
} else {
echo 'Fuera del parámetro';
}



?>