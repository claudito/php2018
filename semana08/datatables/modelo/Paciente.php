<?php 

class Paciente{


function lista()
{

try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT id,codigo,nombres,apellidos,direccion,estado,fecha_creacion FROM paciente";
$statement = $conexion->prepare($query);
$statement->execute();
$result    = $statement->fetchAll();
return $result;


	
} catch (Exception $e) {

echo "Error: ".$e->getMessage();
	
}

}










}


 ?>