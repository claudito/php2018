<?php include'autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo 02</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

</head>
<body>

<div class="container-fluid">
	
<div class="row">

<div class="col-md-12">
	
<?php if (  count(Paciente::lista()) >0): ?>

<div class="table-responsive">
<table class="table table-condensed" id="consulta">
<thead>
<tr>
<th>id</th>
<th>nombres</th>
<th>apellidos</th>
<th>direccion</th>
<th>estado</th>
<th>fecha de creación</th>
</tr>
</thead>

<tbody>
<?php foreach (Paciente::lista() as $key => $value): ?>
<tr>
<td><?php echo $value['id'] ?></td>
<td><?php echo $value['nombres'] ?></td>
<td><?php echo $value['apellidos'] ?></td>
<td><?php echo $value['direccion'] ?></td>
<td><?php echo $value['estado'] ?></td>
<td><?php echo $value['fecha_creacion'] ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>

<?php else: ?>
<p>No existe registros disponibles.</p>	
<?php endif ?>



</div>

</div>


</div>



<script>
	
$(document).ready(function() {
    $('#consulta').DataTable();
} );


</script>
</body>
</html>