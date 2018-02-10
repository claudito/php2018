<?php 


$config = array('SERVER' =>'localhost' ,'USER'=>'root','PASS'=>'','BD'=>'perutec');

$item = 1;

foreach ($config as $key => $value) {

//$item = $item +1;

echo $item++." - ".$key.": ".$value."<br>";
}





?>