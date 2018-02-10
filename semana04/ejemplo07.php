<?php 

#Case Switch

$mes =  "02";

switch ($mes) {
	case '01':
	$resultado = "Enero";
		break;
	case '02':
	$resultado = "Febrero";
		break;
	
	default:
	$resultado = "no existe";
		break;
}

echo $resultado;

 ?>