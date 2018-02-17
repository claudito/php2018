<?php 

include'autoload.php';
/*
$usuario = array(
array('id'=>1,'nombres'=>'JUAN'),
array('id'=>2,'nombres'=>'MARIA'),
array('id'=>3,'nombres'=>'PEDRO')
);

foreach ($usuario as $key => $value) {
	
	echo $value['nombres'];
}
*/

foreach (Usuario::lista() as $key => $value) {
   echo $key."-".$value['id']." - ".$value['nombres']."<br>";
}




 ?>