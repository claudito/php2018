<?php 

include'config.php';
spl_autoload_register(function ($clase){

$ruta = "modelo/".$clase.".php";
include($ruta);

});




 ?>