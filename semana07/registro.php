<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bootstrap 3</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<h1>Registro  de Ingreso</h1><hr>


<form action="controlador/agregar.php" method="POST">
	

<div class="form-group">
<label>Nombres</label>
<input type="text" name="nombres" id="" class="form-control">
</div>

<div class="form-group">
<label>Apellidos</label>
<input type="text" name="apellidos" id="" class="form-control">
</div>

<div class="form-group">
<label>Dni</label>
<input type="text" name="dni" id="" class="form-control">
</div>

<div class="form-group">
<label>Hora</label>
<input type="time" name="hora" id="" class="form-control">
</div>


<div class="form-group">
<label>Fecha</label>
<input type="date" name="fecha" id="" class="form-control">
</div>

<div class="form-group">
<label>Comentario</label>
<textarea name="comentario"  rows="5" class="form-control"></textarea>
</div>


<button class="btn btn-primary">Agregar</button>

</form>



</div>
</div>
</div>



</body>
</html>