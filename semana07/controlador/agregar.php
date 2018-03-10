<?php 

include'../autoload.php';

$nombres    =  $_POST['nombres'];
$apellidos  =  $_POST['apellidos'];
$dni        =  $_POST['dni'];
$hora       =  $_POST['hora'];
$fecha      =  $_POST['fecha'];
$comentario =  $_POST['comentario'];


$data = Registro::agregar($nombres,$apellidos,$dni,$hora,$fecha,$comentario);

echo $data;



 ?>