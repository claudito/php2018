<?php 

#1 
/*
date_default_timezone_set('America/Lima');
echo date('d-m-Y');
echo "<br>";
echo date('H:i:s');
echo "<br>";
echo date('d-m-Y H:i:s');
*/

#2
/*
$fecha =  "2018-02-10";
echo date_format(date_create($fecha),'d-m-Y');
*/

#3
/*
$numero = 268.623456;
//echo round($numero);
echo round($numero,3);
*/

#4
/*
$mensaje = "";
//echo strlen($mensaje);
$resultado = (strlen($mensaje)>0) ? "variable llena" : "variable vacia" ;
echo $resultado;
*/

#5
/*
$alumnos = array('JUAN','PEDRO','MARIA');
//$alumnos = array();
if (count($alumnos)>0) 
{

foreach ($alumnos as $key => $value) {
		echo $value;
}

} 
else
{
  echo "no hay registros disponibles";
}
*/

#6
/*
$correlativo  =  123;
echo str_pad($correlativo, 10,'#',STR_PAD_LEFT);
echo "<br>";
echo str_pad($correlativo, 10,'#',STR_PAD_RIGHT);
echo "<br>";
echo str_pad($correlativo, 10,'#',STR_PAD_BOTH);
*/

#7
$fecha  =  "2018-02-20";
echo substr($fecha,0,4);
echo "<br>";
echo substr($fecha,5,2);
echo "<br>";
echo substr($fecha,8,2);
echo "<br>";
echo substr($fecha,-2);

 ?>