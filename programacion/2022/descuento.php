<?php 
$total = 700;
if ($total < 500) {
	$desc = 0;
} elseif ($total < 1000) {
	$desc = $total * 0.05;
} elseif ($total < 7000) {
	$desc = $total * 0.11;
} elseif ($total < 15000) {
	$desc = $total * 0.18;
} else {
	$desc = $total * 0.25;
}
if ($total < 20) {
	$imp = 0;
} elseif ($total < 40) {
	$imp = $total * 0.3;
} elseif ($total < 500) {
	$imp = $total * 0.4;
} else {
	$imp = $total * 0.5;
}
echo "Total: ".$total."<br>";
echo "Descuento: ".$desc."<br>";
echo "IVA: ".$imp."<br>";
$st = $total + $imp - $desc;
echo "Sub total: ".$st;
?>