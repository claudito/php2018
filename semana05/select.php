<?php 
include'autoload.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Select HTMl5</title>
</head>
<body>

<label>Lista de Usuarios</label>
<select name="" id="">
<option value="">[Seleccionar]</option>
<?php foreach (Usuario::lista() as $key => $value): ?>
<option value="<?php echo $value['id'] ?>"><?php echo $value['nombres'].' '.$value['apellidos'] ?></option>
<?php endforeach ?>

</select>

</body>
</html>