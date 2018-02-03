<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Modal</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- 
Modales:
tamaño:
large  : modal-lg
mediano: modal-md
small  : modal-sm



 -->



<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<button class="btn btn-primary"  data-toggle="modal" 
href="#modal-consultar">Consultar</button>

<div class="modal fade" id="modal-consultar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Consulta</h4>
      </div>
      <div class="modal-body">
        
     ....


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Consultar</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>
</div>



</body>
</html>