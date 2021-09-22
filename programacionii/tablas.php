<?php 

/**
 * tablas de multiplicar
 */
class tablas {
	// funcion principal para mostrar el resultado 
	public function multiplicar() {
		// $inicio = 1;
		// $fin = 10;
		self::procesos(1,10);
	}

	// funcion para realizar los procesos de la multiplicacion
	public function procesos($inicio, $fin) {
		for ($inicio; $inicio <= $fin; $inicio++) { 
			if (($inicio%2)==0) {
				echo 'Tabla del '.$inicio.'<br>';
				for ($i=1; $i <= 10; $i++) { 
					$mult = $inicio * $i;
					echo $inicio." X ".$i." = ".$mult."<br>";
				}
			}
		}
	}

}

$mostrar = new tablas();
$mostrar->multiplicar();
?>