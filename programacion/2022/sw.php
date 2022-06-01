<?php 
$total = 100;
switch ($total) {
	case ($total < 500):
		$desc = 0;
		break;
	case ($total < 1000):
		$desc = $total * 0.05;
		break;
	case ($total < 7000):
		$desc = $total * 0.11;
		break;
	case ($total < 15000):
		$desc = $total * 0.18;
		break;
	default:
		$desc = $total * 0.25;
		break;
}
?>