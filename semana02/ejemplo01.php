<?php 

date_default_timezone_set('America/Lima');

//echo date_default_timezone_get();

$fecha = date('Y-m-d');
$hora  = date('H:i');
//echo $fecha;
  //echo $hora;
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo 01</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

<!-- GET = URL 
     POST = encriptada

-->	
	
<form action="ejemplo01.php"  method="GET">

<label>Código</label>	
<input type="text" name="codigo" id="" required>

<br>
<label>Edad</label>
<input type="number" name="edad" id="" min="18" max="99">

<br>
<label>Talla / Tamaño</label>
<input type="number" name="talla" id=""  step="any">

<br>
<label>fecha</label>
<input type="date" name="fecha"  id="" value="<?php echo $fecha ?>">

<br>
<label>Hora</label>
<input type="time" name="hora"   id="" value="<?php echo $hora ?>">

<br>
<label>Área</label>
<select name="area" id="" required>
<option value="">Seleccionar</option>
<option value="1">Sistemas</option>
<option value="2">Comercio</option>
<option value="3">Almacen</option>
</select>
<br>
<label>Habilidades:</label>
<input type="checkbox" name="1" id="">PHP
<input type="checkbox" name="2" id="">SQL
<input type="checkbox" name="3" id="">Diseño


<br>
<button>Enviar</button> 

</form>


</body>
</html>