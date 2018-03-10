<?php 

class Paciente
{

function lista()
{

try {

$conexion = Conexion::get_conexion();
$query    = "SELECT * FROM paciente";
$statement->execute();
$result = $statement->fetchAll();
return $result;
	
} catch (Exception $e) {
	
 echo "Error: ".$e->getMessage();
}


}









}









 ?>