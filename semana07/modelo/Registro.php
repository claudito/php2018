<?php 

class Registro
{

function agregar($nombres,$apellidos,$dni,$hora,$fecha,$comentario)
{

try {

$conexion = Conexion::get_conexion();
$query    = "INSERT INTO registros(nombres,apellidos,dni,hora,fecha,comentario)VALUES
(:nombres,:apellidos,:dni,:hora,:fecha,:comentario)";
$statement = $conexion->prepare($query);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':dni',$dni);
$statement->bindParam(':hora',$hora);
$statement->bindParam(':fecha',$fecha);
$statement->bindParam(':comentario',$comentario);
$statement->execute();
return "ok";
	
} catch (Exception $e) {
	
 echo "Error: ".$e->getMessage();
}


}









}









 ?>