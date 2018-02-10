<?php 
#Operador ternario

$dni       = "46794282";//servidor
$dni_input = "46794282";//input
/*
var_dump($dni);
echo "<br>";
var_dump($dni_input);
*/
$resultado = ($dni===$dni_input) ? "existe" : "no existe" ;

echo $resultado;

 ?>