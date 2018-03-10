<?php 
include'../autoload.php';
//var_dump(Paciente::lista());

//guardamos el array php en la variable $data
$data  = Paciente::lista();

/*Guardamos los array generados(filas) en un solo array al
cual llamamos "data"
*/
$result = ["data"=>$data];

//creamos el objeto JSON
echo json_encode($result);


 ?>
