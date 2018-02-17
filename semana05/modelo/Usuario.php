<?php 

class Usuario
{


function lista()
{

try {
	
$conexion  =  Conexion::get_conexion();
$query     =  "SELECT * FROM usuario";
$statement =  $conexion->prepare($query);
$statement->execute();
$result    =  $statement->fetchAll();
return $result;


} catch (Exception $e) {
	
echo "Error: ".$e->getMessage();

}

}



}

 ?>